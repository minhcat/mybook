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
use App\Http\Models\QModels\SlidersQModel;
use App\Http\Models\QModels\SystemQModel;
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
	public function __construct() {
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index() {
		//get sliders
		$number_slider   = SystemQModel::get_variable_by_name('slider_select_images');
		$number_slider   = (int)$number_slider->value;
		$data['sliders'] = SlidersQModel::get_sliders_with_number($number_slider);

		//get data topic view
		$background  = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$title_1  = SystemQModel::get_variable_by_name('topic_name_1')->value;
		$number_1 = (int)SystemQModel::get_variable_by_name('topic_number_1')->value;
		$type_1   = SystemQModel::get_variable_by_name('topic_type_1')->value;
		if ($type_1 == 'topic-view') {
			$type_1  = 'topic_view';
			$books_1 = BooksQModel::get_books_home_view($number_1, 0);
			$books_1 = Helper::add_background($books_1, $background);
			$data_1  = ['books_view' => $books_1, 'title_view' => $title_1];
		} else if ($type_1 == 'topic-update') {
			$type_1  = 'topic_update';
			$books_1 = BooksQModel::get_books_home_update($number_1);
			$data_1  = ['books_update' => $books_1, 'title_update' => $title_1];
		} else if ($type_1 == 'topic-comment') {
			$type_1  = 'topic_comment';
			$books_1 = BooksQModel::get_books_home_comment($number_1);
			$data_1  = ['books_comment' => $books_1, 'title_comment' => $title_1];
		} else if ($type_1 == 'topic-rate') {
			$type_1  = 'topic_rate';
			$books_1 = BooksQModel::get_books_home_rate($number_1);
			$data_1  = ['books_rate' => $books_1, 'title_rate' => $title_1];
		}
		
		$data['books_1'] = $books_1;
		$data['title_1'] = $title_1;
		$data['type_1']  = $type_1;
		$data['data_1']  = $data_1;

		//get data topic update
		$title_2  = SystemQModel::get_variable_by_name('topic_name_2')->value;
		$number_2 = (int)SystemQModel::get_variable_by_name('topic_number_2')->value;
		$type_2   = SystemQModel::get_variable_by_name('topic_type_2')->value;
		if ($type_2 == 'topic-view') {
			$type_2  = 'topic_view';
			$books_2 = BooksQModel::get_books_home_view($number_2);
			$books_2 = Helper::add_background($books_2, $background);
			$data_2  = ['books_view' => $books_2, 'title_view' => $title_2];
		} else if ($type_2 == 'topic-update') {
			$type_2  = 'topic_update';
			$books_2 = BooksQModel::get_books_home_update($number_2);
			$data_2  = ['books_update' => $books_2, 'title_update' => $title_2];
		} else if ($type_2 == 'topic-comment') {
			$type_2  = 'topic_comment';
			$books_2 = BooksQModel::get_books_home_comment($number_2);
			$data_2  = ['books_comment' => $books_2, 'title_comment' => $title_2];
		} else if ($type_2 == 'topic-rate') {
			$type_2  = 'topic_rate';
			$books_2 = BooksQModel::get_books_home_rate($number_2);
			$data_2  = ['books_rate' => $books_2, 'title_rate' => $title_2];
		}
		
		$data['books_2'] = $books_2;
		$data['title_2'] = $title_2;
		$data['type_2']  = $type_2;
		$data['data_2']  = $data_2;

		//get data topic comment
		$title_3  = SystemQModel::get_variable_by_name('topic_name_3')->value;
		$number_3 = (int)SystemQModel::get_variable_by_name('topic_number_3')->value;
		$type_3   = SystemQModel::get_variable_by_name('topic_type_3')->value;
		if ($type_3 == 'topic-view') {
			$type_3  = 'topic_view';
			$books_3 = BooksQModel::get_books_home_view($number_3);
			$books_3 = Helper::add_background($books_3, $background);
			$data_3  = ['books_view' => $books_3, 'title_view' => $title_3];
		} else if ($type_3 == 'topic-update') {
			$type_3  = 'topic_update';
			$books_3 = BooksQModel::get_books_home_update($number_3);
			$data_3  = ['books_update' => $books_3, 'title_update' => $title_3];
		} else if ($type_3 == 'topic-comment') {
			$type_3  = 'topic_comment';
			$books_3 = BooksQModel::get_books_home_comment($number_3);
			$data_3  = ['books_comment' => $books_3, 'title_comment' => $title_3];
		} else if ($type_3 == 'topic-rate') {
			$type_3  = 'topic_rate';
			$books_3 = BooksQModel::get_books_home_rate($number_3);
			$data_3  = ['books_rate' => $books_3, 'title_rate' => $title_3];
		}
		
		$data['books_3'] = $books_3;
		$data['title_3'] = $title_3;
		$data['type_3']  = $type_3;
		$data['data_3']  = $data_3;

		//get data topic rate
		$title_4  = SystemQModel::get_variable_by_name('topic_name_4')->value;
		$number_4 = (int)SystemQModel::get_variable_by_name('topic_number_4')->value;
		$type_4   = SystemQModel::get_variable_by_name('topic_type_4')->value;
		if ($type_4 == 'topic-view') {
			$type_4  = 'topic_view';
			$books_4 = BooksQModel::get_books_home_view($number_4);
			$books_4 = Helper::add_background($books_4, $background);
			$data_4  = ['books_view' => $books_1, 'title_view' => $title_4];
		} else if ($type_4 == 'topic-update') {
			$type_4  = 'topic_update';
			$books_4 = BooksQModel::get_books_home_update($number_4);
			$data_4  = ['books_update' => $books_4, 'title_update' => $title_4];
		} else if ($type_4 == 'topic-comment') {
			$type_4  = 'topic_comment';
			$books_4 = BooksQModel::get_books_home_comment($number_4);
			$data_4  = ['books_comment' => $books_4, 'title_comment' => $title_4];
		} else if ($type_4 == 'topic-rate') {
			$type_4  = 'topic_rate';
			$books_4 = BooksQModel::get_books_home_rate($number_4);
			$data_4  = ['books_rate' => $books_4, 'title_rate' => $title_4];
		}
		
		$data['books_4'] = $books_4;
		$data['title_4'] = $title_4;
		$data['type_4']  = $type_4;
		$data['data_4']  = $data_4;

		//data system sidebar
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
		// dd($data);
		// dd($data['top_view']['month']);

		return view('pages.home', $data);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function add_new_view($index) {
		$books = BooksQModel::get_books_home_view(4, $index);
		return $books;
	}
}
