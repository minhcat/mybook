<?php 
namespace App\Http\Controllers;

use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\BooksViewQModel;
use App\Http\Models\QModels\CommentsQModel;
use App\Http\Models\BModels\CommentsBModel;
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
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);
		// dd($data['random_book']);
		// dd($data['top_view']['month']);

		return view('pages.home', $data);
	}

}
