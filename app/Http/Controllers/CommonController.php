<?php 
namespace App\Http\Controllers;

use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksViewQModel;
use App\Http\Models\QModels\SystemQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\SystemBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\CategoriesBModel;
use App\Http\Helpers\Helper;

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
	public static function get_data_sidebar($data)
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
}