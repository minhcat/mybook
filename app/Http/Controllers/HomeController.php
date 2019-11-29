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
use App\Http\Models\QModels\NotificationsQModel;
use App\Http\Models\CModels\NotificationsCModel;
use App\Http\Models\BModels\CategoriesBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\NotificationsBModel;
use App\Http\Models\BModels\SystemBModel;
use App\Http\Helpers\Helper;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\Auth;

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
		$data = [];
		//system
		$data = CommonController::get_data_header($data);
		//user login
		$data = CommonController::get_data_auth($data);
		//data system sidebar
		$data = CommonController::get_data_home_sidebar($data);
		//get sliders
		$number_slider   = SystemQModel::get_variable_by_name('slider_select_images');
		$number_slider   = (int)$number_slider->value;
		$data['sliders'] = SlidersQModel::get_sliders_with_number($number_slider);
		foreach ($data['sliders'] as $key => $slider) {
			$book = BooksQModel::get_book_by_id($slider->id_book);
			$slider->slug = $book->slug;
		}

		//get data topic view
		$background  = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$title_1  = SystemQModel::get_variable_by_name('topic_name_1')->value;
		$number_1 = (int)SystemQModel::get_variable_by_name('topic_number_1')->value;
		$type_1   = SystemQModel::get_variable_by_name('topic_type_1')->value;
		if ($type_1 == 'topic-view') {
			$type_1  = 'topic_view';
			$books_1 = BooksBModel::get_books_home_view($number_1, 0);
			$books_1 = Helper::add_background($books_1, $background);
			$data_1  = ['books_view' => $books_1, 'title_view' => $title_1];
		} else if ($type_1 == 'topic-update') {
			$type_1  = 'topic_update';
			$books_1 = BooksBModel::get_books_home_update($number_1, 0);
			$data_1  = ['books_update' => $books_1, 'title_update' => $title_1];
		} else if ($type_1 == 'topic-comment') {
			$type_1  = 'topic_comment';
			$books_1 = BooksBModel::get_books_home_comment($number_1);
			$data_1  = ['books_comment' => $books_1, 'title_comment' => $title_1];
		} else if ($type_1 == 'topic-rate') {
			$type_1  = 'topic_rate';
			$books_1 = BooksBModel::get_books_home_rate($number_1);
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
			$books_2 = BooksBModel::get_books_home_view($number_2, 0);
			$books_2 = Helper::add_background($books_2, $background);
			$data_2  = ['books_view' => $books_2, 'title_view' => $title_2];
		} else if ($type_2 == 'topic-update') {
			$type_2  = 'topic_update';
			$books_2 = BooksBModel::get_books_home_update($number_2, 0);
			$data_2  = ['books_update' => $books_2, 'title_update' => $title_2];
		} else if ($type_2 == 'topic-comment') {
			$type_2  = 'topic_comment';
			$books_2 = BooksBModel::get_books_home_comment($number_2, 0);
			$data_2  = ['books_comment' => $books_2, 'title_comment' => $title_2];
		} else if ($type_2 == 'topic-rate') {
			$type_2  = 'topic_rate';
			$books_2 = BooksBModel::get_books_home_rate($number_2, 0);
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
			$books_3 = BooksBModel::get_books_home_view($number_3, 0);
			$books_3 = Helper::add_background($books_3, $background);
			$data_3  = ['books_view' => $books_3, 'title_view' => $title_3];
		} else if ($type_3 == 'topic-update') {
			$type_3  = 'topic_update';
			$books_3 = BooksBModel::get_books_home_update($number_3, 0);
			$data_3  = ['books_update' => $books_3, 'title_update' => $title_3];
		} else if ($type_3 == 'topic-comment') {
			$type_3  = 'topic_comment';
			$books_3 = BooksBModel::get_books_home_comment($number_3, 0);
			$data_3  = ['books_comment' => $books_3, 'title_comment' => $title_3];
		} else if ($type_3 == 'topic-rate') {
			$type_3  = 'topic_rate';
			$books_3 = BooksBModel::get_books_home_rate($number_3, 0);
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
			$books_4 = BooksBModel::get_books_home_view($number_4, 0);
			$books_4 = Helper::add_background($books_4, $background);
			$data_4  = ['books_view' => $books_1, 'title_view' => $title_4];
		} else if ($type_4 == 'topic-update') {
			$type_4  = 'topic_update';
			$books_4 = BooksBModel::get_books_home_update($number_4, 0);
			$data_4  = ['books_update' => $books_4, 'title_update' => $title_4];
		} else if ($type_4 == 'topic-comment') {
			$type_4  = 'topic_comment';
			$books_4 = BooksBModel::get_books_home_comment($number_4, 0);
			$data_4  = ['books_comment' => $books_4, 'title_comment' => $title_4];
		} else if ($type_4 == 'topic-rate') {
			$type_4  = 'topic_rate';
			$books_4 = BooksBModel::get_books_home_rate($number_4, 0);
			$data_4  = ['books_rate' => $books_4, 'title_rate' => $title_4];
		}
		
		$data['books_4'] = $books_4;
		$data['title_4'] = $title_4;
		$data['type_4']  = $type_4;
		$data['data_4']  = $data_4;

		
		$data['page'] = 'home';
		// dd($data);

		return view('pages.home', $data);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function add_new_view($index) {
		return BooksBModel::get_books_home_view(4, $index);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function add_new_update($index) {
		return BooksBModel::get_books_home_update(4, $index);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function add_new_comment($index) {
		return BooksBModel::get_books_home_comment(4, $index);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function add_new_rate($index) {
		return BooksBModel::get_books_home_rate(4, $index);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function search_books_menu($name) {
		return BooksQModel::search_books_by_name_with_number($name, 5);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function check_seen_notification() {
		$data = ['seen' => 0];
		return NotificationsCModel::update_notification_by_user_id(Auth::id(), $data);
	}
}
