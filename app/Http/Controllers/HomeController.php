<?php 
namespace App\Http\Controllers;

use App\Http\Models\BooksQModel;
use App\Http\Helpers\Helper;

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
		$books_view = BooksQModel::get_books_sort_view(8);
		$i = 0;
		foreach ($books_view as $book) {
			$i++;
			$book->index = $i;
			switch ($i) {
				case 1:
					$book->background = 'bg-red';
					break;
				case 2:
					$book->background = 'bg-blue';
					break;
				case 3:
					$book->background = 'bg-green';
					break;
				case 4:
					$book->background = 'bg-orange';
					break;			
				default:
					$book->background = 'bg-gray';
					break;
			}
		}
		$data['books_view'] = $books_view;

		//get data topic update
		$books_update = BooksQModel::get_books_sort_update();
		$i = 0;
		foreach ($books_update as $book) {
			$i++;
			$book->index = $i;
		}
		$data['books_update'] = $books_update;

		return view('pages.home', $data);
	}

}
