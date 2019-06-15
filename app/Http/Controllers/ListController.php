<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\BooksQModel;
use App\Http\Models\BooksBModel;
use App\Http\Models\BooksFollowQModel;
use App\Http\Models\BooksViewQModel;
use App\Http\Models\CategoriesQModel;
use App\Http\Models\CommentsBModel;
use App\Http\Models\FriendsQModel;
use App\Http\Models\NotificationsQModel;
use App\Http\Models\NotificationsBModel;
use App\Http\Helpers\Helper;
use App\Http\Helpers\Constants;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

use Illuminate\Http\Request;

class ListController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function category($category)
	{
		$data['books'] = BooksQModel::get_books_list_category($category, Constants::BOOKS_ITEM_LIST);
		$data['category'] = CategoriesQModel::get_category_by_name($category);
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);

		// dd($data);
		return view('pages.list.list-category', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function comment(Request $request)
	{
		$data['books'] = BooksQModel::get_books_list_comment(Constants::BOOKS_ITEM_LIST);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$page = $request->input('page');
		if ($page == null) 
			$data['books'] = Helper::add_background($data['books'], $background);
		else
			$data['books'] = Helper::add_background_else($data['books'], 'bg-gray', Constants::BOOKS_ITEM_LIST*($page - 1));
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];
		// dd($data['books']);

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);

		return view('pages.list.list-comment', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function completed()
	{
		$data['status'] = Constants::STATUS_COMPLETED;
		$data['books']  = BooksQModel::get_books_list_status(Constants::STATUS_COMPLETED, Constants::BOOKS_ITEM_LIST);
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);

		return view('pages.list.list-completed', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function follow()
	{
		$user_id = 1;
		$data['books'] = BooksFollowQModel::get_books_follow_by_user_id($user_id);

		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);
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
		$user_id = 1;
		$data['friends'] = FriendsQModel::get_friends_by_user_id($user_id);
		foreach ($data['friends'] as $friend) {
			if (strlen($friend->description) >= 162)
				$friend->description = substr($friend->description, 0, 160).'...';
		}

		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);
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
		$user_id = 1;
		$data['notifications'] = NotificationsBModel::get_notifications_list($user_id);
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);
		// dd($data);
		return view('pages.list.list-notification', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function process()
	{
		$data['status'] = Constants::STATUS_PROCESS;
		$data['books']  = BooksQModel::get_books_list_status(Constants::STATUS_PROCESS, Constants::BOOKS_ITEM_LIST);
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);

		return view('pages.list.list-process', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function rate(Request $request)
	{
		$data['books'] = BooksQModel::get_books_list_rate(Constants::BOOKS_ITEM_LIST);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$page = $request->input('page');
		if ($page == null) 
			$data['books'] = Helper::add_background($data['books'], $background);
		else
			$data['books'] = Helper::add_background_else($data['books'], 'bg-gray', Constants::BOOKS_ITEM_LIST*($page - 1));
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);

		return view('pages.list.list-rate', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function search(Request $request)
	{
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
			
			$data['search'] = 'true';
			$data['books'] = $books;
		}

		//sidebar
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);
		// dd($data['books']);
		return view('pages.list.list-search', $data);
	}

	public function search_post(Request $request)
	{
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

		$books = BooksQModel::search_books_by_name($search->book);
		$books = BooksBModel::search_books_general($books,$search);
		// dd($search);
		// dd($books);
		// $books_page = arr
		$books = new Paginator(array_chunk($books,12)[0], count($books), 12, 1, [
			'path'  => $request->url(),
			'query' => $request->query(),
		]);
		$data['search'] = 'true';
		$data['books'] = $books;
		// dd($books);

		//sidebar
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);
		// dd($data['search']);
		return view('pages.list.list-search', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function update()
	{
		$data['books'] = BooksQModel::get_books_list_update(Constants::BOOKS_ITEM_LIST);
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);

		return view('pages.list.list-update', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function view(Request $request)
	{
		$data['books'] = BooksQModel::get_books_list_view(Constants::BOOKS_ITEM_LIST);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$page = $request->input('page');
		if ($page == null) 
			$data['books'] = Helper::add_background($data['books'], $background);
		else
			$data['books'] = Helper::add_background_else($data['books'], 'bg-gray', Constants::BOOKS_ITEM_LIST*($page - 1));
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);

		dd($data['books']);

		return view('pages.list.list-view', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function year($year)
	{
		$data['books'] = BooksQModel::get_books_list_year($year, Constants::BOOKS_ITEM_LIST);
		$data['year'] = $year;
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);
		// dd($data);
		return view('pages.list.list-year', $data);
	}
}
