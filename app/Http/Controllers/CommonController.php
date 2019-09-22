<?php 
namespace App\Http\Controllers;

use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\AuthorsViewQModel;
use App\Http\Models\QModels\AuthorsLikeQModel;
use App\Http\Models\QModels\AuthorsFollowQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksViewQModel;
use App\Http\Models\QModels\BooksLikeQModel;
use App\Http\Models\QModels\BooksFollowQModel;
use App\Http\Models\QModels\SystemQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\QModels\TransViewQModel;
use App\Http\Models\QModels\TransLikeQModel;
use App\Http\Models\QModels\TransFollowQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\NotificationsQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\SystemBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\CategoriesBModel;
use App\Http\Models\BModels\NotificationsBModel;
use App\Http\Helpers\Helper;
use Illuminate\Support\Facades\Auth;

class CommonController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function get_data_header($data)
	{
		//system
		$data['system']     = SystemBModel::get_variables_website();
		//categories menu
		$data['menu_categories'] = CategoriesBModel::get_categories_menu();
		$data['menu_years']      = [];
		for ($year = 2000; $year <= date('Y'); $year++) {
			$check = BooksQModel::check_have_book_in_year($year);
			if ($check) {
				array_push($data['menu_years'], $year);
			}
		}

		return $data;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function get_data_home_sidebar($data)
	{
		$sidebar_home = [];
		$data['sidebar'] = [];
		$topview_number = 5;
		$random_book    = 5;
		$new_comment    = 5;
		$sidebar_home_number = (int)SystemQModel::get_variable_by_name('sidebar_number_box')->value;
		for ($i = 0; $i < $sidebar_home_number; $i++) {
			$sidebar_home[$i] = SystemQModel::get_variable_by_name('sidebar_box_type_'.($i+1))->value;
			array_push($data['sidebar'], $sidebar_home[$i]);
			if ($sidebar_home[$i] == 'top-view') {
				$topview_number = (int)SystemQModel::get_variable_by_name('sidebar_box_number_'.($i+1))->value;
			} elseif ($sidebar_home[$i] == 'random-book') {
				$random_book = (int)SystemQModel::get_variable_by_name('sidebar_box_number_'.($i+1))->value;
			} elseif ($sidebar_home[$i] == 'new-comment') {
				$new_comment = (int)SystemQModel::get_variable_by_name('sidebar_box_number_'.($i+1))->value;
			}
		}
		
		// if ()

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date($topview_number);
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week($topview_number);
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month($topview_number);

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar($random_book);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar($new_comment);
		// dd($data['top_view']['month']);
		$books_popup = [];
		$books_popup = Helper::add_book_from_array($books_popup, $data['top_view']['date']);
		$books_popup = Helper::add_book_from_array($books_popup, $data['top_view']['week']);
		$books_popup = Helper::add_book_from_array($books_popup, $data['top_view']['month']);
		$books_popup = Helper::add_book_from_array($books_popup, $data['random_book']);
		$books_popup = Helper::add_book_from_array_comment($books_popup, $data['new_comment']);
		
		$users_popup   = [];
		$users_popup   = Helper::add_user_from_array_comment($users_popup, $data['new_comment']);
		$chars_popup   = [];
		$chars_popup   = Helper::add_character_from_array_comment($chars_popup, $data['new_comment']);
		$authors_popup = [];
		$authors_popup = Helper::add_author_from_array_comment($authors_popup, $data['new_comment']);
		$trans_popup   = [];
		$trans_popup   = Helper::add_trans_from_array_comment($trans_popup, $data['new_comment']);
		$data['books_popup']   = $books_popup;
		$data['users_popup']   = $users_popup;
		$data['chars_popup']   = $chars_popup;
		$data['authors_popup'] = $authors_popup;
		$data['trans_popup']   = $trans_popup;
		return $data;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function get_data_list_sidebar($data)
	{
		$sidebar_list = [];
		$data['sidebar'] = [];
		$topview_number = 5;
		$random_book    = 5;
		$new_comment    = 5;
		$sidebar_list_number = (int)SystemQModel::get_variable_by_name('list_sidebar')->value;
		for ($i = 0; $i < $sidebar_list_number; $i++) {
			$sidebar_list[$i] = SystemQModel::get_variable_by_name('list_box_type_'.($i+1))->value;
			array_push($data['sidebar'], $sidebar_list[$i]);
			if ($sidebar_list[$i] == 'top-view') {
				$topview_number = (int)SystemQModel::get_variable_by_name('list_box_number_'.($i+1))->value;
			} elseif ($sidebar_list[$i] == 'random-book') {
				$random_book = (int)SystemQModel::get_variable_by_name('list_box_number_'.($i+1))->value;
			} elseif ($sidebar_list[$i] == 'new-comment') {
				$new_comment = (int)SystemQModel::get_variable_by_name('list_box_number_'.($i+1))->value;
			}
		}

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date($topview_number);
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week($topview_number);
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month($topview_number);

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar($random_book);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar($new_comment);

		$books_popup = [];
		$books_popup = Helper::add_book_from_array($books_popup, $data['top_view']['date']);
		$books_popup = Helper::add_book_from_array($books_popup, $data['top_view']['week']);
		$books_popup = Helper::add_book_from_array($books_popup, $data['top_view']['month']);
		$books_popup = Helper::add_book_from_array($books_popup, $data['random_book']);
		$books_popup = Helper::add_book_from_array_comment($books_popup, $data['new_comment']);
		
		$users_popup   = [];
		$users_popup   = Helper::add_user_from_array_comment($users_popup, $data['new_comment']);
		$chars_popup   = [];
		$chars_popup   = Helper::add_character_from_array_comment($chars_popup, $data['new_comment']);
		$authors_popup = [];
		$authors_popup = Helper::add_author_from_array_comment($authors_popup, $data['new_comment']);
		$trans_popup   = [];
		$trans_popup   = Helper::add_trans_from_array_comment($trans_popup, $data['new_comment']);
		$data['books_popup']   = $books_popup;
		$data['users_popup']   = $users_popup;
		$data['chars_popup']   = $chars_popup;
		$data['authors_popup'] = $authors_popup;
		$data['trans_popup']   = $trans_popup;

		return $data;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function get_data_detail_sidebar($data)
	{
		$sidebar_detail = [];
		$data['sidebar'] = [];
		$topview_number = 5;
		$random_book    = 5;
		$new_comment    = 5;
		$sidebar_detail_number = (int)SystemQModel::get_variable_by_name('detail_sidebar')->value;
		for ($i = 0; $i < $sidebar_detail_number; $i++) {
			$sidebar_detail[$i] = SystemQModel::get_variable_by_name('detail_sidebar_box_'.($i+1))->value;
			array_push($data['sidebar'], $sidebar_detail[$i]);
			if ($sidebar_detail[$i] == 'top-view') {
				$topview_number = (int)SystemQModel::get_variable_by_name('detail_sidebar_number_'.($i+1))->value;
			} elseif ($sidebar_detail[$i] == 'random-book') {
				$random_book = (int)SystemQModel::get_variable_by_name('detail_sidebar_number_'.($i+1))->value;
			} elseif ($sidebar_detail[$i] == 'new-comment') {
				$new_comment = (int)SystemQModel::get_variable_by_name('detail_sidebar_number_'.($i+1))->value;
			}
		}

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date($topview_number);
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week($topview_number);
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month($topview_number);

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar($random_book);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar($new_comment);

		$books_popup = [];
		$books_popup = Helper::add_book_from_array($books_popup, $data['top_view']['date']);
		$books_popup = Helper::add_book_from_array($books_popup, $data['top_view']['week']);
		$books_popup = Helper::add_book_from_array($books_popup, $data['top_view']['month']);
		$books_popup = Helper::add_book_from_array($books_popup, $data['random_book']);
		$books_popup = Helper::add_book_from_array_comment($books_popup, $data['new_comment']);
		
		$users_popup   = [];
		$users_popup   = Helper::add_user_from_array_comment($users_popup, $data['new_comment']);
		$chars_popup   = [];
		$chars_popup   = Helper::add_character_from_array_comment($chars_popup, $data['new_comment']);
		$authors_popup = [];
		$authors_popup = Helper::add_author_from_array_comment($authors_popup, $data['new_comment']);
		$trans_popup   = [];
		$trans_popup   = Helper::add_trans_from_array_comment($trans_popup, $data['new_comment']);
		$data['books_popup']   = $books_popup;
		$data['users_popup']   = $users_popup;
		$data['chars_popup']   = $chars_popup;
		$data['authors_popup'] = $authors_popup;
		$data['trans_popup']   = $trans_popup;

		return $data;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function get_data_auth($data)
	{
		if (Auth::check()) {
			$data['user_login'] = UsersQModel::get_user_by_id(Auth::id());
			$data['notifications'] = NotificationsBModel::get_notifications_list(Auth::id());
			$data['noti_seen']     = NotificationsQModel::get_notifications_not_seen(Auth::id());
			foreach ($data['notifications'] as $key => $notification) {
				$date_create = date_create($notification->date);
				$notification->year   = (int)date_format($date_create, 'Y');
				$notification->month  = (int)date_format($date_create, 'm');
				$notification->date   = (int)date_format($date_create, 'd');
				$notification->hour   = (int)date_format($date_create, 'H');
				$notification->minute = (int)date_format($date_create, 'i');
				$notification->second = (int)date_format($date_create, 's');
			}
		}
		return $data;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function get_data_auth_detail($data, $item_id, $type)
	{
		if (Auth::check()) {
			$data['user_login'] = UsersQModel::get_user_by_id(Auth::id());
			$data['notifications'] = NotificationsBModel::get_notifications_list(Auth::id());
			$data['noti_seen']     = NotificationsQModel::get_notifications_not_seen(Auth::id());
			if ($type == 'book') {
				$book_like   = BooksLikeQModel::get_book_like_by_user_id_and_book_id(Auth::id(), $item_id);
				$book_follow = BooksFollowQModel::get_book_follow_by_user_id_and_book_id(Auth::id(), $item_id);
				$data['contact'] = [];
				$data['contact']['like']   = (empty($book_like)) ? true : false;
				$data['contact']['follow'] = (empty($book_follow)) ? true : false;
			} elseif ($type == 'author') {
				$author_like   = AuthorsLikeQModel::get_author_like_by_user_id_and_author_id(Auth::id(), $item_id);
				$author_follow = AuthorsFollowQModel::get_author_follow_by_user_id_and_author_id(Auth::id(), $item_id);
				$data['contact'] = [];
				$data['contact']['like']   = (empty($author_like)) ? true : false;
				$data['contact']['follow'] = (empty($author_follow)) ? true : false;
			} elseif ($type == 'trans') {
				$trans_like   = TransLikeQModel::get_trans_like_by_user_id_and_trans_id(Auth::id(), $item_id);
				$trans_follow = TransFollowQModel::get_trans_follow_by_user_id_and_trans_id(Auth::id(), $item_id);
				$data['contact'] = [];
				$data['contact']['like']   = (empty($trans_like)) ? true : false;
				$data['contact']['follow'] = (empty($trans_follow)) ? true : false;
			}
			foreach ($data['notifications'] as $key => $notification) {
				$date_create = date_create($notification->date);
				$notification->year   = (int)date_format($date_create, 'Y');
				$notification->month  = (int)date_format($date_create, 'm');
				$notification->date   = (int)date_format($date_create, 'd');
				$notification->hour   = (int)date_format($date_create, 'H');
				$notification->minute = (int)date_format($date_create, 'i');
				$notification->second = (int)date_format($date_create, 's');
			}
		}
		return $data;
	}
}