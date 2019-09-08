<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\QModels\BooksFollowQModel;
use App\Http\Models\QModels\BooksViewQModel;
use App\Http\Models\QModels\BooksRateQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\QModels\FriendsQModel;
use App\Http\Models\QModels\NotificationsQModel;
use App\Http\Models\BModels\NotificationsBModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\SystemQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\BModels\SystemBModel;
use App\Http\Models\BModels\CategoriesBModel;
use App\Http\Helpers\Helper;
use App\Http\Helpers\Constants;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
// use Symfony\Component\HttpFoundation\Cookie;
use Cookie;

use Illuminate\Http\Request;

class ListController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function category($category)
	{
		// header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$data['books'] = BooksQModel::get_books_list_category($category, Constants::BOOKS_ITEM_LIST);
		foreach ($data['books'] as $key => $book) {
			$book = Helper::add_category_from_book($book);
			$book = Helper::short_description($book, 250);
		}
		$data['category'] = CategoriesQModel::get_category_by_name($category);

		// dd($data);
		Cookie::queue('name','value',60);
		return view('pages.list.list-category', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function comment(Request $request)
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$data['books'] = BooksQModel::get_books_list_comment(Constants::BOOKS_ITEM_LIST);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$page = $request->input('page');
		if ($page == null) 
			$data['books'] = Helper::add_background($data['books'], $background);
		else
			$data['books'] = Helper::add_background_else($data['books'], 'bg-gray', Constants::BOOKS_ITEM_LIST*($page - 1));
		foreach ($data['books'] as $key => $book) {
			$book = Helper::add_category_from_book($book);
			$book = Helper::short_description($book, 250);
		}

		// dd($value);
		return view('pages.list.list-comment', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function completed()
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$data['status'] = Constants::STATUS_COMPLETED;
		$data['books']  = BooksQModel::get_books_list_status(Constants::STATUS_COMPLETED, Constants::BOOKS_ITEM_LIST);
		foreach ($data['books'] as $key => $book) {
			//short description
			$book = Helper::short_description($book, 250);
			//get chaps
			$book->max_chap = 0;
			$chaps = ChapsQModel::sum_chap_by_book_id($book->id);
			foreach ($chaps as $key => $chap) {
				if ($book->max_chap < $chap->sum_chap) {
					$book->max_chap = $chap->sum_chap;
				}
			}
		}

		return view('pages.list.list-completed', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function follow()
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$user_id = 1;
		$data['books'] = BooksFollowQModel::get_books_follow_by_user_id($user_id);
		foreach ($data['books'] as $key => $book) {
			$book->new_chaps = ChapsQModel::get_chaps_new_by_book_id($book->id, 2);
			if ($book->new_chaps == null) {
				$book->new_chaps = [];
			}
		}
		// dd($data);
		return view('pages.list.list-follow', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function friend()
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$user_id = 1;
		$data['friends'] = FriendsQModel::get_friends_by_user_id($user_id);
		foreach ($data['friends'] as $friend) {
			if (strlen($friend->description) >= 162)
				$friend->description = substr($friend->description, 0, 160).'...';
		}

		// dd($data);
		return view('pages.list.list-friend', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function notification()
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$user_id = 1;
		$data['notifications'] = NotificationsBModel::get_notifications_list($user_id);
		// dd($data);
		return view('pages.list.list-notification', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function history(Request $request)
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		//get cookie
		$history = Cookie::get('history');
		if ($history == null)
			$history = [];
		else
			$history = json_decode($history);
		foreach ($history as $key => $item) {
			$item = json_decode($item);
			$history[$key] = $item;
		}
		//get data from history
		foreach ($history as $key => $item) {
			if ($item->page == 'read') {
				$chap = ChapsQModel::get_chap_by_id($item->id);
				$history[$key]->name        = $chap->book_name.' - '.$chap->name;
				$history[$key]->image       = $chap->image;
				$history[$key]->view        = $chap->view;
				$history[$key]->like        = $chap->like;
				$history[$key]->follow      = $chap->follow;
				$history[$key]->description = $chap->description;
				$history[$key]->type        = 'books';
				if (strlen($history[$key]->description) >= 262)
					$history[$key]->description = mb_substr($history[$key]->description, 0, 260).'...';
			} elseif ($item->page == 'book') {
				$book = BooksQModel::get_book_by_id($item->id);
				$history[$key]->name        = $book->name;
				$history[$key]->image       = $book->image;
				$history[$key]->view        = $book->view;
				$history[$key]->like        = $book->like;
				$history[$key]->follow      = $book->follow;
				$history[$key]->description = $book->description;
				$history[$key]->type        = 'books';
				if (strlen($history[$key]->description) >= 262)
					$history[$key]->description = mb_substr($history[$key]->description, 0, 260).'...';
			} elseif ($item->page == 'author') {
				$author = AuthorsQModel::get_author_by_id($item->id);
				$history[$key]->name        = $author->name;
				$history[$key]->image       = $author->image;
				$history[$key]->view        = $author->view;
				$history[$key]->like        = $author->like;
				$history[$key]->follow      = $author->follow;
				$history[$key]->description = $author->description;
				$history[$key]->type        = 'authors';
				if (strlen($history[$key]->description) >= 262)
					$history[$key]->description = mb_substr($history[$key]->description, 0, 260).'...';
			} elseif ($item->page == 'character') {
				$character = CharactersQModel::get_character_by_id($item->id);
				$history[$key]->name        = $character->name;
				$history[$key]->image       = $character->image;
				$history[$key]->view        = 0;
				$history[$key]->like        = 0;
				$history[$key]->follow      = 0;
				$history[$key]->description = $character->description;
				$history[$key]->type        = 'characters';
				if (strlen($history[$key]->description) >= 262)
					$history[$key]->description = mb_substr($history[$key]->description, 0, 260).'...';
			} elseif ($item->page == 'user') {
				$user = UsersQModel::get_user_by_id($item->id);
				$history[$key]->name        = $user->name;
				$history[$key]->image       = $user->image;
				$history[$key]->view        = 0;
				$history[$key]->like        = $user->like;
				$history[$key]->follow      = 0;
				$history[$key]->description = $user->description;
				$history[$key]->type        = 'users';
				if (strlen($history[$key]->description) >= 262)
					$history[$key]->description = mb_substr($history[$key]->description, 0, 260).'...';
			} elseif ($item->page == 'trans') {
				$trans = TransQModel::get_trans_by_id($item->id);
				$history[$key]->name        = $trans->name;
				$history[$key]->image       = $trans->image;
				$history[$key]->view        = $trans->view;
				$history[$key]->like        = $trans->like;
				$history[$key]->follow      = $trans->follow;
				$history[$key]->description = $trans->description;
				$history[$key]->type        = 'trans';
				if (strlen($history[$key]->description) >= 262)
					$history[$key]->description = mb_substr($history[$key]->description, 0, 260).'...';
			}
		}
		$page = $request->input('page');
		if ($page == null)
			$page = 1;
		// dd($history);
		if (count($history) == 0) {
			$history = new Paginator(null, 0, 12, 1, [
				'path'  => $request->url(),
				'query' => $request->query(),
			]);
		} else {
			$history = new Paginator(array_chunk($history,12)[$page-1], count($history), 12, $page, [
				'path'  => $request->url(),
				'query' => $request->query(),
			]);
		}
		$data['history'] = $history;

		return view('pages.list.list-history', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function process()
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$data['status'] = Constants::STATUS_PROCESS;
		$data['books']  = BooksQModel::get_books_list_status(Constants::STATUS_PROCESS, Constants::BOOKS_ITEM_LIST);
		// dd($data);
		return view('pages.list.list-process', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function rate(Request $request)
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$data['books'] = BooksQModel::get_books_list_rate(Constants::BOOKS_ITEM_LIST);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$page = $request->input('page');
		if ($page == null) 
			$data['books'] = Helper::add_background($data['books'], $background);
		else
			$data['books'] = Helper::add_background_else($data['books'], 'bg-gray', Constants::BOOKS_ITEM_LIST*($page - 1));
		foreach ($data['books'] as $key => $book) {
			$book = Helper::add_category_from_book($book);
			$five_star  = BooksRateQModel::get_rate_five_star_by_book_id($book->id);
			if ($five_star != null) {
				$book->five_star = $five_star->number;
			} else {
				$book->five_star = 0;
			}
			$four_star  = BooksRateQModel::get_rate_four_star_by_book_id($book->id);
			if ($four_star != null) {
				$book->four_star = $four_star->number;
			} else {
				$book->four_star = 0;
			}
			$three_star = BooksRateQModel::get_rate_three_star_by_book_id($book->id);
			if ($three_star != null) {
				$book->three_star = $three_star->number;
			} else {
				$book->three_star = 0;
			}
			$two_star   = BooksRateQModel::get_rate_two_star_by_book_id($book->id);
			if ($two_star != null) {
				$book->two_star = $two_star->number;
			} else {
				$book->two_star = 0;
			}
		}
		// dd($data);
		return view('pages.list.list-rate', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function search(Request $request)
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		//get value search
		$search = new \stdClass;
		$search->book      = $request->input('book');
		$search->year      = $request->input('year');
		$search->status    = $request->input('status');
		$search->chap      = $request->input('chap');
		$search->author    = $request->input('author');
		$search->character = $request->input('character');
		$search->trans     = $request->input('trans');
		$search->category  = $request->input('category');
		$search->sort      = $request->input('sort');
		$search->order     = $request->input('order');
		$page              = $request->input('page');
		if ($page == null)
			$page = 1;
		// dd($search);
		if ($search->book === null) {
			// dd('hello');
			//get request search
			$data['is_search'] = 'true';
			$data['search'] = null;
			$books = new Paginator(null, 0, 12, 1, [
				'path'  => $request->url(),
				'query' => $request->query(),
			]);
			$data['books'] = $books;
		} else {
			$books = BooksQModel::search_books_by_name($search->book);
			$books = BooksBModel::search_books_general($books,$search);
			// dd($books);
			if (count($books) == 0) {
				$books = new Paginator(null, 0, 12, 1, [
					'path'  => $request->url(),
					'query' => $request->query(),
				]);
			} else {
				$books = new Paginator(array_chunk($books,12)[$page-1], count($books), 12, $page, [
					'path'  => $request->url(),
					'query' => $request->query(),
				]);
			}
			// $books_page = arr
			
			$data['is_search'] = 'true';
			$data['search'] = $search;
			$data['books'] = $books;
			foreach ($data['books'] as $key => $book) {
				$book = Helper::add_category_from_book($book);
				$book = Helper::short_description($book, 250);
			}
		}

		$data['years']      = [];
		for ($year = 2000; $year <= date('Y'); $year++) {
			$check = BooksQModel::check_have_book_in_year($year);
			if ($check) {
				array_push($data['years'], $year);
			}
		}
		$data['categories_search'] = CategoriesQModel::get_categories_all();

		// dd($data);
		return view('pages.list.list-search', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function update()
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$data['books'] = BooksQModel::get_books_list_update(Constants::BOOKS_ITEM_LIST);
		foreach ($data['books'] as $key => $book) {
			$book->new_chaps = ChapsQModel::get_chaps_new_by_book_id($book->id, 3);
			if ($book->new_chaps == null) {
				$book->new_chaps = [];
			}
		}
		
		return view('pages.list.list-update', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function view(Request $request)
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$data['books'] = BooksQModel::get_books_list_view(Constants::BOOKS_ITEM_LIST);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$page = $request->input('page');
		if ($page == null) 
			$data['books'] = Helper::add_background($data['books'], $background);
		else
			$data['books'] = Helper::add_background_else($data['books'], 'bg-gray', Constants::BOOKS_ITEM_LIST*($page - 1));
		foreach ($data['books'] as $key => $book) {
			$book = Helper::add_category_from_book($book);
			// get book view
			$day_view   = BooksViewQModel::get_book_view_day_by_book_id($book->id, 5, 2, 6, 2019);
			$week_view  = BooksViewQModel::get_book_view_week_by_book_id($book->id, 2, 6, 2019);
			$month_view = BooksViewQModel::get_book_view_month_by_book_id($book->id, 6, 2019);
			$all_view = BooksViewQModel::get_book_view_all_by_book_id($book->id, 2019);
			$book->book_view = [
				'day'   => ($day_view != null) ? (int)$day_view->view : 0,
				'week'  => ($week_view != null) ? (int)$week_view->view : 0,
				'month' => ($month_view != null) ? (int)$month_view->view : 0,
				'all'   => ($all_view != null) ? (int)$all_view->view : 0,
			];
		}

		//data system sidebar
		// dd($data);

		return view('pages.list.list-view', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function year($year)
	{
		//header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_sidebar($data);

		$data['books'] = BooksQModel::get_books_list_year($year, Constants::BOOKS_ITEM_LIST);
		foreach ($data['books'] as $key => $book) {
			$book = Helper::add_category_from_book($book);
		}
		$data['year']  = $year;
		// dd($data);
		return view('pages.list.list-year', $data);
	}
}
