<?php 
namespace App\Http\Controllers;

use App\Http\Models\BooksQModel;
use App\Http\Models\AuthorsQModel;
use App\Http\Models\UsersQModel;
use App\Http\Models\ChapsQModel;
use App\Http\Models\TransQModel;
use App\Http\Models\CharactersQModel;
use App\Http\Models\BooksViewQModel;
use App\Http\Models\CommentsQModel;
use App\Http\Helpers\Helper;
use App\Http\Helpers\Constants;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//get data topic view
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$books_view = BooksQModel::get_books_home_view(Constants::BOOKS_ITEM_VIEW);
		$books_view = Helper::add_background($books_view, $background);

		$data['books_view'] = $books_view;

		//get data topic update
		$books_update = BooksQModel::get_books_home_update(Constants::BOOKS_ITEM_UPDATE);
		$data['books_update']  = $books_update;

		//get data topic comment
		$data['books_comment'] = BooksQModel::get_books_home_comment(Constants::BOOKS_ITEM_COMMENT);

		//get data topic rate
		$data['books_rate']    = BooksQModel::get_books_home_rate(Constants::BOOKS_ITEM_RATE);

		//data system sidebar
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook', 'advertisement'];

		//data top-view sidebar
		$data['top_view']['date']  = BooksViewQModel::get_books_view_current_date();
		$data['top_view']['week']  = BooksViewQModel::get_books_view_current_week();
		$data['top_view']['month'] = BooksViewQModel::get_books_view_current_month();

		//data random-book sidebar
		$data['random_book'] = BooksQModel::get_books_random(6);
		foreach ($data['random_book'] as $key => $book) {
			if (strlen($book->name) >= 22)
				$book->name = substr($book->name, 0, 20).'...';
			$book->description = substr($book->description, 0, 45).'...';
		}

		$data['new_comment'] = CommentsQModel::get_comments_new(6);
		foreach ($data['new_comment'] as $comment) {
			//get page name
			if ($comment->page == 'book') {
				$book = BooksQModel::get_book_by_id($comment->id_page);
				$comment->page_name = $book->name;
			} else if ($comment->page == 'character') {
				$character = CharactersQModel::get_character_by_id($comment->id_page);
				$comment->page_name = $character->name;
			} else if ($comment->page == 'author') {
				$author = AuthorsQModel::get_author_by_id($comment->id_page);
				$comment->page_name = $author->name;
			} else if ($comment->page == 'trans') {
				$trans = TransQModel::get_trans_by_id($comment->id_page);
				$comment->page_name = $trans->name;
			} else if ($comment->page == 'user') {
				$user = UsersQModel::get_user_by_id($comment->id_page);
				$comment->page_name = $user->name;
			}
			//shorten comment
			if (strlen($comment->content) >= 25)
				$comment->content = substr($comment->content, 0, 25).'...';
		}
		// dd($data['random_book']);
		// dd($data['top_view']['month']);

		return view('pages.home', $data);
	}

}
