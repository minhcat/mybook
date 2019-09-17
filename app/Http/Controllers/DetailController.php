<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksLikeQModel;
use App\Http\Models\QModels\BooksLikeStatisticQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\CommentsQModel;
use App\Http\Models\QModels\NotificationsQModel;
use App\Http\Models\CModels\BooksLikeCModel;
use App\Http\Models\CModels\BooksLikeStatisticCModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\NotificationsBModel;
use App\Http\Helpers\Helper;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Cookie;

class DetailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function author($slug)
	{
		$data = [];
		// login
		$data = CommonController::get_data_auth($data);
		// header and footer
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_detail_sidebar($data);

		$data['author']  = AuthorsQModel::get_author_by_slug($slug);
		$data['books']   = BooksQModel::get_books_by_author_id($data['author']->id);
		$data['comments'] = CommentsBModel::get_comments_page($data['author']->id, 'author');
		//set history cookie
		$history = Cookie::get('history');
		// dd($history);
		// check history has value
		if ($history == null)
			$history = '[]';
		//history decode
		$history = json_decode($history);
		// dd($history);
		// add item
		$item = new \stdClass;
		$item->id = $data['author']->id;
		$item->page = 'author';
		$item->time = time();
		$item = json_encode($item);
		array_push($history, $item);

		$history = json_encode($history);
		// dd($history);

		Cookie::queue('history',$history, 1440);
		// dd($data);
		return view('pages.detail.detail-author', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function book($slug)
	{
		$book  = BooksQModel::get_book_by_slug($slug);
		$data = [];
		// login
		$data = CommonController::get_data_auth_detail($data, $book->id);
		// header and footer
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_detail_sidebar($data);

		
		$array_trans = ChapsQModel::get_trans_id_by_book_id($book->id);
		// dd($trans_id);
		foreach ($array_trans as $trans) {
			$chaps[$trans->id_trans] = ChapsQModel::get_chaps_by_book_id_trans_id($book->id, $trans->id_trans);
		}

		$data['book']  = $book;
		$data['chaps_trans'] = $chaps;

		$data['comments'] = CommentsBModel::get_comments_page($data['book']->id, 'book');
		//set history cookie
		$history = Cookie::get('history');
		// dd($history);
		// check history has value
		if ($history == null)
			$history = '[]';
		//history decode
		$history = json_decode($history);
		// dd($history);
		// add item
		$item = new \stdClass;
		$item->id = $data['book']->id;
		$item->page = 'book';
		$item->time = time();
		$item = json_encode($item);
		array_push($history, $item);

		$history = json_encode($history);
		// dd($history);

		Cookie::queue('history',$history, 1440);
		// dd($data);
		return view('pages.detail.detail-book', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function character($slug)
	{
		$data = [];
		// login
		$data = CommonController::get_data_auth($data);
		// header and footer
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_detail_sidebar($data);

		$data['character'] = CharactersQModel::get_character_by_slug($slug);
		//data comment
		$data['comments'] = CommentsBModel::get_comments_page($data['character']->id, 'character');
		//set history cookie
		$history = Cookie::get('history');
		// dd($history);
		// check history has value
		if ($history == null)
			$history = '[]';
		//history decode
		$history = json_decode($history);
		// dd($history);
		// add item
		$item = new \stdClass;
		$item->id = $data['character']->id;
		$item->page = 'character';
		$item->time = time();
		$item = json_encode($item);
		array_push($history, $item);

		$history = json_encode($history);
		// dd($history);

		Cookie::queue('history',$history, 1440);
		// dd($data);

		return view('pages.detail.detail-character', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function user($slug)
	{
		$data = [];
		// login
		$data = CommonController::get_data_auth($data);
		// header and footer
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_detail_sidebar($data);

		$data['user'] = UsersQModel::get_user_by_name_login($slug);
		
		//data comment
		$data['comments'] = CommentsBModel::get_comments_page($data['user']->id, 'user');

		//set history cookie
		$history = Cookie::get('history');
		// dd($history);
		// check history has value
		if ($history == null)
			$history = '[]';
		//history decode
		$history = json_decode($history);
		// dd($history);
		// add item
		$item = new \stdClass;
		$item->id = $data['user']->id;
		$item->page = 'user';
		$item->time = time();
		$item = json_encode($item);
		array_push($history, $item);

		$history = json_encode($history);
		// dd($history);

		Cookie::queue('history',$history, 1440);

		return view('pages.detail.detail-user', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function trans($slug)
	{
		$data = [];
		// login
		$data = CommonController::get_data_auth($data);
		// header and footer
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_detail_sidebar($data);

		$data['trans'] = TransQModel::get_trans_by_slug($slug);
		$data['books'] = TransQModel::get_books_by_trans_id($data['trans']->id);

		$data['comments'] = CommentsBModel::get_comments_page($data['trans']->id, 'trans');
		//set history cookie
		$history = Cookie::get('history');
		// check history has value
		if ($history == null)
			$history = '[]';
		//history decode
		$history = json_decode($history);
		// add item
		$item = new \stdClass;
		$item->id = $data['trans']->id;
		$item->page = 'trans';
		$item->time = time();
		$item = json_encode($item);
		array_push($history, $item);

		$history = json_encode($history);

		Cookie::queue('history',$history, 1440);
		return view('pages.detail.detail-trans', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_like_book($user_id, $book_id)
	{
		$book = BooksQModel::get_book_by_id($book_id);
		$book_like = BooksLikeQModel::get_book_like_by_user_id_and_book_id($user_id, $book_id);
		// check user id has in data
		if ($book_like == null) {
			// insert book like
			$data = [
				'id_user' => $user_id,
				'id_book' => $book_id,
				'date'    => date('Y-m-d')
			];
			BooksLikeCModel::insert_book_like($data);
			// update book
			$data = [
				'like' => $book->like + 1,
			];

			BooksCModel::update_book($book_id, $data);
			// update book like statistic
			$date  = (int)date('d');
			$month = (int)date('m');
			$year  = (int)date('Y');
			$time  = Helper::get_time_statistic($date, $month, $year);
			$book_like_statistic = BooksLikeStatisticQModel::get_book_like_by_book_id_and_date($book_id, $date, $month, $year);
			if (empty($book_like_statistic)) {
				$data = [
					'id_book' => $book_id,
					'day'     => $time['day'],
					'date'    => $date,
					'week'    => $time['week'],
					'month'   => $month,
					'season'  => $time['season'],
					'year'    => $year,
					'like_statistic' => 1
				];
				BooksLikeStatisticCModel::insert_book_like($data);
			} else {
				$data = [
					'like_statistic' => $book_like_statistic[0]->like_statistic + 1,
				];
				BooksLikeStatisticCModel::update_book_like($book_like_statistic[0]->id, $data);
			}
		}
	}
}
