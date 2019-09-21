<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\AuthorsLikeQModel;
use App\Http\Models\QModels\AuthorsLikeStatisticQModel;
use App\Http\Models\QModels\AuthorsFollowQModel;
use App\Http\Models\QModels\AuthorsFollowStatisticQModel;
use App\Http\Models\QModels\AuthorsRateQModel;
use App\Http\Models\QModels\AuthorsRateStatisticQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksLikeQModel;
use App\Http\Models\QModels\BooksLikeStatisticQModel;
use App\Http\Models\QModels\BooksFollowQModel;
use App\Http\Models\QModels\BooksFollowStatisticQModel;
use App\Http\Models\QModels\BooksRateQModel;
use App\Http\Models\QModels\BooksRateStatisticQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\QModels\TransLikeQModel;
use App\Http\Models\QModels\TransLikeStatisticQModel;
use App\Http\Models\QModels\TransFollowQModel;
use App\Http\Models\QModels\TransFollowStatisticQModel;
use App\Http\Models\QModels\TransRateQModel;
use App\Http\Models\QModels\TransRateStatisticQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\CharactersBookQModel;
use App\Http\Models\QModels\CommentsQModel;
use App\Http\Models\QModels\NotificationsQModel;
use App\Http\Models\CModels\AuthorsCModel;
use App\Http\Models\CModels\AuthorsLikeCModel;
use App\Http\Models\CModels\AuthorsLikeStatisticCModel;
use App\Http\Models\CModels\AuthorsFollowCModel;
use App\Http\Models\CModels\AuthorsFollowStatisticCModel;
use App\Http\Models\CModels\AuthorsRateCModel;
use App\Http\Models\CModels\AuthorsRateStatisticCModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\CModels\BooksLikeCModel;
use App\Http\Models\CModels\BooksLikeStatisticCModel;
use App\Http\Models\CModels\BooksFollowCModel;
use App\Http\Models\CModels\BooksFollowStatisticCModel;
use App\Http\Models\CModels\BooksRateCModel;
use App\Http\Models\CModels\BooksRateStatisticCModel;
use App\Http\Models\CModels\TransCModel;
use App\Http\Models\CModels\TransLikeCModel;
use App\Http\Models\CModels\TransLikeStatisticCModel;
use App\Http\Models\CModels\TransFollowCModel;
use App\Http\Models\CModels\TransFollowStatisticCModel;
use App\Http\Models\CModels\TransRateCModel;
use App\Http\Models\CModels\TransRateStatisticCModel;
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
		$author = AuthorsQModel::get_author_by_slug($slug);
		$data = [];
		// login
		$data = CommonController::get_data_auth_detail($data, $author->id, 'author');
		// header and footer
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_detail_sidebar($data);

		$data['author']  = $author;
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
		$book = BooksQModel::get_book_by_slug($slug);
		$book = Helper::add_category_from_book($book);
		$book->author  = AuthorsQModel::get_author_by_id($book->id_author);
		$book->artist  = AuthorsQModel::get_author_by_id($book->id_artist);
		$book->transes = TransQModel::get_transes_by_book_id($book->id);
		$book->characters = CharactersBookQModel::get_characters_by_book_id($book->id);
		$data = [];
		// login
		$data = CommonController::get_data_auth_detail($data, $book->id, 'book');
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
		$trans = TransQModel::get_trans_by_slug($slug);
		$data = [];
		// login
		$data = CommonController::get_data_auth_detail($data, $trans->id, 'trans');
		// header and footer
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_detail_sidebar($data);

		$data['trans'] = $trans;
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
					'like_statistic' => $book_like_statistic->like_statistic + 1,
				];
				BooksLikeStatisticCModel::update_book_like($book_like_statistic->id, $data);
			}
		}
		// get data
		$book = BooksQModel::get_book_by_id($book_id);
		return $book->like;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_unlike_book($user_id, $book_id)
	{
		$book = BooksQModel::get_book_by_id($book_id);
		$book_like = BooksLikeQModel::get_book_like_by_user_id_and_book_id($user_id, $book_id);
		// check user id has in data
		if ($book_like != null) {
			// delete book like
			$data = [
				'id_user' => $user_id,
				'id_book' => $book_id,
				'date'    => date('Y-m-d')
			];
			BooksLikeCModel::delete_book_like($book_like->id);
			// update book
			$data = [
				'like' => $book->like - 1,
			];

			BooksCModel::update_book($book_id, $data);
			// update book like statistic
			$date  = (int)date_format(date_create($book_like->date), 'd');
			$month = (int)date_format(date_create($book_like->date), 'm');
			$year  = (int)date_format(date_create($book_like->date), 'Y');
			$book_like_statistic = BooksLikeStatisticQModel::get_book_like_by_book_id_and_date($book_id, $date, $month, $year);
			if (!empty($book_like_statistic)) {
				if ($book_like_statistic->like_statistic == 1) {
					BooksLikeStatisticCModel::delete_book_like($book_like_statistic->id);
				} else {
					$data = ['like_statistic' => $book_like_statistic->like_statistic - 1];
					BooksLikeStatisticCModel::update_book_like($book_like_statistic->id, $data);
				}
			}
		}
		// get data
		$book = BooksQModel::get_book_by_id($book_id);
		return $book->like;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_follow_book($user_id, $book_id)
	{
		$book = BooksQModel::get_book_by_id($book_id);
		$book_follow = BooksFollowQModel::get_book_follow_by_user_id_and_book_id($user_id, $book_id);
		// check user id has in data
		if ($book_follow == null) {
			// insert book follow
			$data = [
				'id_user' => $user_id,
				'id_book' => $book_id,
				'date'    => date('Y-m-d')
			];
			BooksFollowCModel::insert_book_follow($data);
			// update book
			$data = [
				'follow' => $book->follow + 1,
			];

			BooksCModel::update_book($book_id, $data);
			// update book like statistic
			$date  = (int)date('d');
			$month = (int)date('m');
			$year  = (int)date('Y');
			$time  = Helper::get_time_statistic($date, $month, $year);
			$book_follow_statistic = BooksFollowStatisticQModel::get_book_follow_by_book_id_and_date($book_id, $date, $month, $year);
			if (empty($book_follow_statistic)) {
				$data = [
					'id_book' => $book_id,
					'day'     => $time['day'],
					'date'    => $date,
					'week'    => $time['week'],
					'month'   => $month,
					'season'  => $time['season'],
					'year'    => $year,
					'follow'  => 1
				];
				BooksFollowStatisticCModel::insert_book_follow($data);
			} else {
				$data = [
					'follow' => $book_follow_statistic->follow + 1,
				];
				BooksFollowStatisticCModel::update_book_follow($book_follow_statistic->id, $data);
			}
		}
		// get data
		$book = BooksQModel::get_book_by_id($book_id);
		return $book->follow;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_unfollow_book($user_id, $book_id)
	{
		$book = BooksQModel::get_book_by_id($book_id);
		$book_follow = BooksFollowQModel::get_book_follow_by_user_id_and_book_id($user_id, $book_id);
		// check user id has in data
		if ($book_follow != null) {
			// delete book like
			$data = [
				'id_user' => $user_id,
				'id_book' => $book_id,
				'date'    => date('Y-m-d')
			];
			BooksFollowCModel::delete_book_follow($book_follow->id);
			// update book
			$data = [
				'follow' => $book->follow - 1,
			];

			BooksCModel::update_book($book_id, $data);
			// update book like statistic
			$date  = (int)date_format(date_create($book_follow->date), 'd');
			$month = (int)date_format(date_create($book_follow->date), 'm');
			$year  = (int)date_format(date_create($book_follow->date), 'Y');
			$book_follow_statistic = BooksFollowStatisticQModel::get_book_follow_by_book_id_and_date($book_id, $date, $month, $year);
			if (!empty($book_follow_statistic)) {
				if ($book_follow_statistic->follow == 1) {
					BooksFollowStatisticCModel::delete_book_follow($book_follow_statistic->id);
				} else {
					$data = ['follow' => $book_follow_statistic->follow - 1];
					BooksFollowStatisticCModel::update_book_follow($book_follow_statistic->id, $data);
				}
			}
		}
		// get data
		$book = BooksQModel::get_book_by_id($book_id);
		return $book->follow;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_rate_book($user_id, $book_id, $point)
	{
		$book = BooksQModel::get_book_by_id($book_id);
		$book_rate = BooksRateQModel::get_book_rate_by_user_id_and_book_id($user_id, $book_id);
		// check user id has in data
		if ($book_rate == null) {
			// insert book rate
			$data = [
				'id_user' => $user_id,
				'id_book' => $book_id,
				'rate'    => $point,
				'date'    => date('Y-m-d')
			];
			BooksRateCModel::insert_book_rate($data);
			// update book
			$rate_point = ($book->rate_point * $book->rate + $point)/($book->rate_point + 1);
			$data = [
				'rate' => $book->rate + 1,
				'rate_point' => $rate_point,
			];

			BooksCModel::update_book($book_id, $data);
		} else {
			$data = ['rate' => $point];
			BooksRateCModel::update_book_rate($book_rate->id, $data);
		}
		
		// update book like statistic
		$date  = (int)date('d');
		$month = (int)date('m');
		$year  = (int)date('Y');
		$time  = Helper::get_time_statistic($date, $month, $year);
		$book_rate_statistic = BooksRateStatisticQModel::get_book_rate_by_book_id_and_date_and_rate($book_id, $date, $month, $year, $point);
		if (empty($book_rate_statistic)) {
			$data = [
				'id_book' => $book_id,
				'day'     => $time['day'],
				'date'    => $date,
				'week'    => $time['week'],
				'month'   => $month,
				'season'  => $time['season'],
				'year'    => $year,
				'point'   => $point,
				'rate'    => 1
			];
			BooksRateStatisticCModel::insert_book_rate($data);
		} else {
			$data = [
				'rate' => $book_rate_statistic->rate + 1,
			];
			BooksRateStatisticCModel::update_book_rate($book_rate_statistic->id, $data);
		}
		$book = BooksQModel::get_book_by_id($book_id);
		$data = [];
		$data['rate'] = $book->rate;
		$data['rate_point'] = $book->rate_point;
		return $data;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_like_author($user_id, $author_id)
	{
		$author = AuthorsQModel::get_author_by_id($author_id);
		$author_like = AuthorsLikeQModel::get_author_like_by_user_id_and_author_id($user_id, $author_id);
		// check user id has in data
		if ($author_like == null) {
			// insert author like
			$data = [
				'id_user'   => $user_id,
				'id_author' => $author_id,
				'date'      => date('Y-m-d')
			];
			AuthorsLikeCModel::insert_author_like($data);
			// update author
			$data = [
				'like' => $author->like + 1,
			];

			AuthorsCModel::update_author($author_id, $data);
			// update book like statistic
			$date  = (int)date('d');
			$month = (int)date('m');
			$year  = (int)date('Y');
			$time  = Helper::get_time_statistic($date, $month, $year);
			$author_like_statistic = AuthorsLikeStatisticQModel::get_author_like_by_author_id_and_date($author_id, $date, $month, $year);
			if (empty($author_like_statistic)) {
				$data = [
					'id_author'      => $author_id,
					'day'            => $time['day'],
					'date'           => $date,
					'week'           => $time['week'],
					'month'          => $month,
					'season'         => $time['season'],
					'year'           => $year,
					'like_statistic' => 1
				];
				AuthorsLikeStatisticCModel::insert_author_like($data);
			} else {
				$data = [
					'like_statistic'  => $author_like_statistic->like_statistic + 1,
				];
				AuthorsLikeStatisticCModel::update_author_like($author_like_statistic->id, $data);
			}
		}
		// get data
		$author = AuthorsQModel::get_author_by_id($author_id);
		return $author->like;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_unlike_author($user_id, $author_id)
	{
		$author = AuthorsQModel::get_author_by_id($author_id);
		$author_like = AuthorsLikeQModel::get_author_like_by_user_id_and_author_id($user_id, $author_id);
		// check user id has in data
		if ($author_like != null) {
			// delete author like
			$data = [
				'id_user'   => $user_id,
				'id_author' => $author_id,
				'date'      => date('Y-m-d')
			];
			AuthorsLikeCModel::delete_author_like($author_like->id);
			// update book
			$data = [
				'like' => $author->like - 1,
			];

			AuthorsCModel::update_author($author_id, $data);
			// update author like statistic
			$date  = (int)date_format(date_create($author_like->date), 'd');
			$month = (int)date_format(date_create($author_like->date), 'm');
			$year  = (int)date_format(date_create($author_like->date), 'Y');
			$author_like_statistic = AuthorsLikeStatisticQModel::get_author_like_by_author_id_and_date($author_id, $date, $month, $year);
			if (!empty($author_like_statistic)) {
				if ($author_like_statistic->like_statistic == 1) {
					AuthorsLikeStatisticCModel::delete_author_like($author_like_statistic->id);
				} else {
					$data = ['like_statistic' => $author_like_statistic->like_statistic - 1];
					AuthorsLikeStatisticCModel::update_author_like($author_like_statistic->id, $data);
				}
			}
		}
		// get data
		$author = AuthorsQModel::get_author_by_id($author_id);
		return $author->like;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_follow_author($user_id, $author_id)
	{
		$author = AuthorsQModel::get_author_by_id($author_id);
		$author_follow = AuthorsFollowQModel::get_author_follow_by_user_id_and_author_id($user_id, $author_id);
		// check user id has in data
		if ($author_follow == null) {
			// insert author like
			$data = [
				'id_user'   => $user_id,
				'id_author' => $author_id,
				'date'      => date('Y-m-d')
			];
			AuthorsFollowCModel::insert_author_follow($data);
			// update author
			$data = [
				'follow' => $author->follow + 1,
			];

			AuthorsCModel::update_author($author_id, $data);
			// update book like statistic
			$date  = (int)date('d');
			$month = (int)date('m');
			$year  = (int)date('Y');
			$time  = Helper::get_time_statistic($date, $month, $year);
			$author_follow_statistic = AuthorsFollowStatisticQModel::get_author_follow_by_author_id_and_date($author_id, $date, $month, $year);
			if (empty($author_follow_statistic)) {
				$data = [
					'id_author' => $author_id,
					'day'     => $time['day'],
					'date'    => $date,
					'week'    => $time['week'],
					'month'   => $month,
					'season'  => $time['season'],
					'year'    => $year,
					'follow'  => 1
				];
				AuthorsFollowStatisticCModel::insert_author_follow($data);
			} else {
				$data = [
					'follow'  => $author_follow_statistic->follow + 1,
				];
				AuthorsFollowStatisticCModel::update_author_follow($author_follow_statistic->id, $data);
			}
		}
		// get data
		$author = AuthorsQModel::get_author_by_id($author_id);
		return $author->follow;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_unfollow_author($user_id, $author_id)
	{
		$author = AuthorsQModel::get_author_by_id($author_id);
		$author_follow = AuthorsFollowQModel::get_author_follow_by_user_id_and_author_id($user_id, $author_id);
		// check user id has in data
		if ($author_follow != null) {
			// delete author like
			$data = [
				'id_user'   => $user_id,
				'id_author' => $author_id,
				'date'      => date('Y-m-d')
			];
			AuthorsFollowCModel::delete_author_follow($author_follow->id);
			// update book
			$data = [
				'follow' => $author->follow - 1,
			];

			AuthorsCModel::update_author($author_id, $data);
			// update author like statistic
			$date  = (int)date_format(date_create($author_follow->date), 'd');
			$month = (int)date_format(date_create($author_follow->date), 'm');
			$year  = (int)date_format(date_create($author_follow->date), 'Y');
			$author_follow_statistic = AuthorsFollowStatisticQModel::get_author_follow_by_author_id_and_date($author_id, $date, $month, $year);
			if (!empty($author_follow_statistic)) {
				if ($author_follow_statistic->follow == 1) {
					AuthorsFollowStatisticCModel::delete_author_follow($author_follow_statistic->id);
				} else {
					$data = ['follow' => $author_follow_statistic->follow - 1];
					AuthorsFollowStatisticCModel::update_author_follow($author_follow_statistic->id, $data);
				}
			}
		}
		// get data
		$author = AuthorsQModel::get_author_by_id($author_id);
		return $author->follow;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_rate_author($user_id, $author_id, $point)
	{
		$author = AuthorsQModel::get_author_by_id($author_id);
		$author_rate = AuthorsRateQModel::get_author_rate_by_user_id_and_author_id($user_id, $author_id);
		// check user id has in data
		if ($author_rate == null) {
			// insert author rate
			$data = [
				'id_user'   => $user_id,
				'id_author' => $author_id,
				'rate'      => $point,
				'date'      => date('Y-m-d')
			];
			AuthorsRateCModel::insert_author_rate($data);
			// update author
			$rate_point = round(($author->rate_point * $author->rate + $point)/($author->rate + 1), 2);
			$data = [
				'rate' => $author->rate + 1,
				'rate_point' => $rate_point,
			];

			AuthorsCModel::update_author($author_id, $data);
		} else {
			$data = ['rate' => $point];
			AuthorsRateCModel::update_author_rate($author_rate->id, $data);
		}
		
		// update book like statistic
		$date  = (int)date('d');
		$month = (int)date('m');
		$year  = (int)date('Y');
		$time  = Helper::get_time_statistic($date, $month, $year);
		$author_rate_statistic = AuthorsRateStatisticQModel::get_author_rate_by_author_id_and_date_and_rate($author_id, $date, $month, $year, $point);
		if (empty($author_rate_statistic)) {
			$data = [
				'id_author' => $author_id,
				'day'     => $time['day'],
				'date'    => $date,
				'week'    => $time['week'],
				'month'   => $month,
				'season'  => $time['season'],
				'year'    => $year,
				'point'   => $point,
				'rate'    => 1
			];
			AuthorsRateStatisticCModel::insert_author_rate($data);
		} else {
			$data = [
				'rate' => $author_rate_statistic->rate + 1,
			];
			AuthorsRateStatisticCModel::update_author_rate($author_rate_statistic->id, $data);
		}
		$author = AuthorsQModel::get_author_by_id($author_id);
		$data = [];
		$data['rate'] = $author->rate;
		$data['rate_point'] = $author->rate_point;
		return $data;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_like_trans($user_id, $trans_id)
	{
		$trans = TransQModel::get_trans_by_id($trans_id);
		$trans_like = TransLikeQModel::get_trans_like_by_user_id_and_trans_id($user_id, $trans_id);
		// check user id has in data
		if ($trans_like == null) {
			// insert author like
			$data = [
				'id_user'   => $user_id,
				'id_trans'  => $trans_id,
				'date'      => date('Y-m-d')
			];
			TransLikeCModel::insert_trans_like($data);
			// update author
			$data = [
				'like' => $trans->like + 1,
			];

			TransCModel::update_trans($trans_id, $data);
			// update book like statistic
			$date  = (int)date('d');
			$month = (int)date('m');
			$year  = (int)date('Y');
			$time  = Helper::get_time_statistic($date, $month, $year);
			$trans_like_statistic = TransLikeStatisticQModel::get_trans_like_by_trans_id_and_date($trans_id, $date, $month, $year);
			if (empty($trans_like_statistic)) {
				$data = [
					'id_trans'       => $trans_id,
					'day'            => $time['day'],
					'date'           => $date,
					'week'           => $time['week'],
					'month'          => $month,
					'season'         => $time['season'],
					'year'           => $year,
					'like_statistic' => 1
				];
				TransLikeStatisticCModel::insert_trans_like($data);
			} else {
				$data = [
					'like_statistic'  => $trans_like_statistic->like_statistic + 1,
				];
				TransLikeStatisticCModel::update_trans_like($trans_like_statistic->id, $data);
			}
		}
		// get data
		$trans = TransQModel::get_trans_by_id($trans_id);
		return $trans->like;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_unlike_trans($user_id, $trans_id)
	{
		$trans = TransQModel::get_trans_by_id($trans_id);
		$trans_like = TransLikeQModel::get_trans_like_by_user_id_and_trans_id($user_id, $trans_id);
		// check user id has in data
		if ($trans_like != null) {
			// delete author like
			$data = [
				'id_user'   => $user_id,
				'id_author' => $trans_id,
				'date'      => date('Y-m-d')
			];
			TransLikeCModel::delete_trans_like($trans_like->id);
			// update book
			$data = [
				'like' => $trans->like - 1,
			];

			TransCModel::update_trans($trans_id, $data);
			// update author like statistic
			$date  = (int)date_format(date_create($trans_like->date), 'd');
			$month = (int)date_format(date_create($trans_like->date), 'm');
			$year  = (int)date_format(date_create($trans_like->date), 'Y');
			$trans_like_statistic = TransLikeStatisticQModel::get_trans_like_by_trans_id_and_date($trans_id, $date, $month, $year);
			if (!empty($trans_like_statistic)) {
				if ($trans_like_statistic->like_statistic == 1) {
					TransLikeStatisticCModel::delete_trans_like($trans_like_statistic->id);
				} else {
					$data = ['like_statistic' => $trans_like_statistic->like_statistic - 1];
					TransLikeStatisticCModel::update_trans_like($trans_like_statistic->id, $data);
				}
			}
		}
		// get data
		$trans = TransQModel::get_trans_by_id($trans_id);
		return $trans->like;
	}
}
