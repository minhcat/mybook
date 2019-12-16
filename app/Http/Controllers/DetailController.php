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
use App\Http\Models\QModels\FriendsQModel;
use App\Http\Models\QModels\FriendsAddQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersLikeQModel;
use App\Http\Models\QModels\UsersLikeStatisticQModel;
use App\Http\Models\QModels\UsersRateQModel;
use App\Http\Models\QModels\UsersRateStatisticQModel;
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
use App\Http\Models\CModels\CommentsCModel;
use App\Http\Models\CModels\FriendsAddCModel;
use App\Http\Models\CModels\TransCModel;
use App\Http\Models\CModels\TransLikeCModel;
use App\Http\Models\CModels\TransLikeStatisticCModel;
use App\Http\Models\CModels\TransFollowCModel;
use App\Http\Models\CModels\TransFollowStatisticCModel;
use App\Http\Models\CModels\TransRateCModel;
use App\Http\Models\CModels\TransRateStatisticCModel;
use App\Http\Models\CModels\UsersCModel;
use App\Http\Models\CModels\UsersLikeCModel;
use App\Http\Models\CModels\UsersLikeStatisticCModel;
use App\Http\Models\CModels\UsersRateCModel;
use App\Http\Models\CModels\UsersRateStatisticCModel;
use App\Http\Models\CModels\NotificationsCModel;
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

		$data['page']     = 'author';
		$data['author']   = $author;
		$data['books']    = BooksQModel::get_books_by_author_id($data['author']->id);
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
		$book = Helper::add_category_for_book($book);
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
		$chaps = [];
		foreach ($array_trans as $key => $trans) {
			$chaps[$key] = ChapsQModel::get_chaps_by_book_id_trans_id($book->id, $trans->id_trans);
		}

		$data['page']  = 'book'; //user to comment blade
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

		$data['page']     = 'character';
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
		$user = UsersQModel::get_user_by_name_login($slug);
		$user = Helper::add_category_for_user($user);
		$data = [];
		// login
		$data = CommonController::get_data_auth_detail($data, $user->id, 'user');
		// header and footer
		$data = CommonController::get_data_header($data);

		//sidebar
		$data = CommonController::get_data_detail_sidebar($data);

		$data['page'] = 'user';
		$data['user'] = $user;
		
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
		// dd($data);

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

		$data['page']  = 'trans';
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

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_follow_trans($user_id, $trans_id)
	{
		$trans = TransQModel::get_trans_by_id($trans_id);
		$trans_follow = TransFollowQModel::get_trans_follow_by_user_id_and_trans_id($user_id, $trans_id);
		// check user id has in data
		if ($trans_follow == null) {
			// insert author like
			$data = [
				'id_user'   => $user_id,
				'id_trans'  => $trans_id,
				'date'      => date('Y-m-d')
			];
			TransFollowCModel::insert_trans_follow($data);
			// update author
			$data = [
				'follow' => $trans->follow + 1,
			];

			TransCModel::update_trans($trans_id, $data);
			// update book like statistic
			$date  = (int)date('d');
			$month = (int)date('m');
			$year  = (int)date('Y');
			$time  = Helper::get_time_statistic($date, $month, $year);
			$trans_follow_statistic = TransFollowStatisticQModel::get_trans_follow_by_trans_id_and_date($trans_id, $date, $month, $year);
			if (empty($trans_follow_statistic)) {
				$data = [
					'id_trans' => $trans_id,
					'day'      => $time['day'],
					'date'     => $date,
					'week'     => $time['week'],
					'month'    => $month,
					'season'   => $time['season'],
					'year'     => $year,
					'follow'   => 1
				];
				TransFollowStatisticCModel::insert_trans_follow($data);
			} else {
				$data = [
					'follow'  => $trans_follow_statistic->follow + 1,
				];
				TransFollowStatisticCModel::update_trans_follow($trans_follow_statistic->id, $data);
			}
		}
		// get data
		$trans = TransQModel::get_trans_by_id($trans_id);
		return $trans->follow;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_unfollow_trans($user_id, $trans_id)
	{
		$trans = TransQModel::get_trans_by_id($trans_id);
		$trans_follow = TransFollowQModel::get_trans_follow_by_user_id_and_trans_id($user_id, $trans_id);
		// check user id has in data
		if ($trans_follow != null) {
			// delete author follow
			$data = [
				'id_user'   => $user_id,
				'id_author' => $trans_id,
				'date'      => date('Y-m-d')
			];
			TransFollowCModel::delete_trans_follow($trans_follow->id);
			// update book
			$data = [
				'follow' => $trans->follow - 1,
			];

			TransCModel::update_trans($trans_id, $data);
			// update author follow statistic
			$date  = (int)date_format(date_create($trans_follow->date), 'd');
			$month = (int)date_format(date_create($trans_follow->date), 'm');
			$year  = (int)date_format(date_create($trans_follow->date), 'Y');
			$trans_follow_statistic = TransFollowStatisticQModel::get_trans_follow_by_trans_id_and_date($trans_id, $date, $month, $year);
			if (!empty($trans_follow_statistic)) {
				if ($trans_follow_statistic->follow == 1) {
					TransFollowStatisticCModel::delete_trans_follow($trans_follow_statistic->id);
				} else {
					$data = ['follow' => $trans_follow_statistic->follow - 1];
					TransFollowStatisticCModel::update_trans_follow($trans_follow_statistic->id, $data);
				}
			}
		}
		// get data
		$trans = TransQModel::get_trans_by_id($trans_id);
		return $trans->follow;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_rate_trans($user_id, $trans_id, $point)
	{
		$trans = TransQModel::get_trans_by_id($trans_id);
		$trans_rate = TransRateQModel::get_trans_rate_by_user_id_and_trans_id($user_id, $trans_id);
		// check user id has in data
		if ($trans_rate == null) {
			// insert author rate
			$data = [
				'id_user'  => $user_id,
				'id_trans' => $trans_id,
				'rate'     => $point,
				'date'     => date('Y-m-d')
			];
			TransRateCModel::insert_trans_rate($data);
			// update author
			$rate_point = round(($trans->rate_point * $trans->rate + $point)/($trans->rate + 1), 2);
			$data = [
				'rate' => $trans->rate + 1,
				'rate_point' => $rate_point,
			];

			TransCModel::update_trans($trans_id, $data);
		} else {
			$data = ['rate' => $point];
			TransRateCModel::update_trans_rate($trans_rate->id, $data);
			$rate_point = round(($trans->rate_point * ($trans->rate-1) + $point)/$trans->rate, 2);
			$data = ['rate_point' => $rate_point];
			TransCModel::update_trans($trans_id, $data);
		}
		
		// update book like statistic
		$date  = (int)date('d');
		$month = (int)date('m');
		$year  = (int)date('Y');
		$time  = Helper::get_time_statistic($date, $month, $year);
		$trans_rate_statistic = TransRateStatisticQModel::get_trans_rate_by_trans_id_and_date_and_rate($trans_id, $date, $month, $year, $point);
		if (empty($trans_rate_statistic)) {
			$data = [
				'id_trans' => $trans_id,
				'day'     => $time['day'],
				'date'    => $date,
				'week'    => $time['week'],
				'month'   => $month,
				'season'  => $time['season'],
				'year'    => $year,
				'point'   => $point,
				'rate'    => 1
			];
			TransRateStatisticCModel::insert_trans_rate($data);
		} else {
			$data = [
				'rate' => $trans_rate_statistic->rate + 1,
			];
			TransRateStatisticCModel::update_trans_rate($trans_rate_statistic->id, $data);
		}
		$trans = TransQModel::get_trans_by_id($trans_id);
		$data = [];
		$data['rate'] = $trans->rate;
		$data['rate_point'] = $trans->rate_point;
		return $data;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_like_user($user_like_id, $user_id)
	{
		$user = UsersQModel::get_user_by_id($user_id);
		$user_like = UsersLikeQModel::get_user_like_by_user_id_and_user_like_id($user_id, $user_like_id);
		// check user id has in data
		if ($user_like == null) {
			// insert author like
			$data = [
				'id_user'      => $user_id,
				'id_user_like' => $user_like_id,
				'date'         => date('Y-m-d')
			];
			UsersLikeCModel::insert_user_like($data);
			// update author
			$data = [
				'like' => $user->like + 1,
			];

			UsersCModel::update_user($user_id, $data);
			// update book like statistic
			$date  = (int)date('d');
			$month = (int)date('m');
			$year  = (int)date('Y');
			$time  = Helper::get_time_statistic($date, $month, $year);
			$user_like_statistic = UsersLikeStatisticQModel::get_user_like_by_user_id_and_date($user_id, $date, $month, $year);
			if (empty($user_like_statistic)) {
				$data = [
					'id_user'        => $user_id,
					'day'            => $time['day'],
					'date'           => $date,
					'week'           => $time['week'],
					'month'          => $month,
					'season'         => $time['season'],
					'year'           => $year,
					'like_statistic' => 1
				];
				UsersLikeStatisticCModel::insert_user_like($data);
			} else {
				$data = [
					'like_statistic'  => $user_like_statistic->like_statistic + 1,
				];
				UsersLikeStatisticCModel::update_user_like($user_like_statistic->id, $data);
			}
		}
		// get data
		$user = UsersQModel::get_user_by_id($user_id);
		return $user->like;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_unlike_user($user_like_id, $user_id)
	{
		$user = UsersQModel::get_user_by_id($user_id);
		$user_like = UsersLikeQModel::get_user_like_by_user_id_and_user_like_id($user_id, $user_like_id);
		// check user id has in data
		if ($user_like != null) {
			// delete author like
			$data = [
				'id_user'      => $user_id,
				'id_user_like' => $user_id,
				'date'         => date('Y-m-d')
			];
			UsersLikeCModel::delete_user_like($user_like->id);
			// update book
			$data = [
				'like' => $user->like - 1,
			];

			UsersCModel::update_user($user_id, $data);
			// update author like statistic
			$date  = (int)date_format(date_create($user_like->date), 'd');
			$month = (int)date_format(date_create($user_like->date), 'm');
			$year  = (int)date_format(date_create($user_like->date), 'Y');
			$user_like_statistic = UsersLikeStatisticQModel::get_user_like_by_user_id_and_date($user_id, $date, $month, $year);
			if (!empty($user_like_statistic)) {
				if ($user_like_statistic->like_statistic == 1) {
					UsersLikeStatisticCModel::delete_user_like($user_like_statistic->id);
				} else {
					$data = ['like_statistic' => $user_like_statistic->like_statistic - 1];
					UsersLikeStatisticCModel::update_user_like($user_like_statistic->id, $data);
				}
			}
		}
		// get data
		$user = UsersQModel::get_user_by_id($user_id);
		return $user->like;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_rate_user($user_rate_id, $user_id, $point)
	{
		$user = UsersQModel::get_user_by_id($user_id);
		$user_rate = UsersRateQModel::get_user_rate_by_user_rate_id_and_user_id($user_rate_id, $user_id);
		// check user id has in data
		if ($user_rate == null) {
			// insert author rate
			$data = [
				'id_user_rate' => $user_rate_id,
				'id_user'      => $user_id,
				'rate'         => $point,
				'date'         => date('Y-m-d')
			];
			UsersRateCModel::insert_user_rate($data);
			// update author
			$rate_point = round(($user->rate_point * $user->rate + $point)/($user->rate + 1), 2);
			$data = [
				'rate' => $user->rate + 1,
				'rate_point' => $rate_point,
			];

			UsersCModel::update_user($user_id, $data);
		} else {
			$data = ['rate' => $point];
			UsersRateCModel::update_user_rate($user_rate->id, $data);

			$old_rate_point = ($user->rate_point*$user->rate - $user_rate->rate)/($user->rate - 1);
			$new_rate_point = round( ( $old_rate_point*( $user->rate - 1 ) + $point)/$user->rate );
			$data = [
				'rate_point' => $new_rate_point,
			];
			UsersCModel::update_user($user_id, $data);
		}
		
		// update book like statistic
		$date  = (int)date('d');
		$month = (int)date('m');
		$year  = (int)date('Y');
		$time  = Helper::get_time_statistic($date, $month, $year);
		$user_rate_statistic = UsersRateStatisticQModel::get_user_rate_by_user_id_and_date_and_rate($user_id, $date, $month, $year, $point);
		if (empty($user_rate_statistic)) {
			$data = [
				'id_user' => $user_id,
				'day'     => $time['day'],
				'date'    => $date,
				'week'    => $time['week'],
				'month'   => $month,
				'season'  => $time['season'],
				'year'    => $year,
				'point'   => $point,
				'rate'    => 1
			];
			UsersRateStatisticCModel::insert_user_rate($data);
		} else {
			
			$data = [
				'rate' => $user_rate_statistic->rate + 1,
				'rate_point' => $new_rate_point,
			];
			UsersRateStatisticCModel::update_user_rate($user_rate_statistic->id, $data);
		}
		$user = UsersQModel::get_user_by_id($user_id);
		$data = [];
		$data['rate'] = $user->rate;
		$data['rate_point'] = $user->rate_point;
		return $data;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_add_friend($user_add_id, $user_id)
	{
		$user   = UsersQModel::get_user_by_id($user_id);
		$friend = FriendsQModel::get_friend_by_user_id_1_and_user_id_2($user_add_id, $user_id);
		if ($friend == null) {
			// $friend_add = FriendsAddQModel::get_friend_add_by_user_add_id_and_user_id($user_add_id, $user_id);
			$data = [
				'id_user'     => $user_id,
				'id_user_add' => $user_add_id,
				'date'        => date('Y-m-d'),
			];
			$id = FriendsAddCModel::insert_friend_add($data);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function post_comment(Request $request)
	{
		// dd($request->all());
		$data = [
			'id_user'	=> Auth::id(),
			'id_page'	=> $request->input('id_page'),
			'content'	=> $request->input('content'),
			'type'		=> $request->input('type'),
			'page'		=> $request->input('page'),
			'level'		=> $request->input('level'),
			'id_reply'	=> ($request->input('id_reply') == '') ? null : $request->input('id_reply'),
			'datetime'	=> date('Y-m-d H:i:s'),
		];

		CommentsCModel::insert_comment($data);

		// check reply and create noti
		if ($data['id_reply'] != null) {
			$data = [
				'id_user'		=> $data['id_reply'],
				'id_contant'	=> Auth::id(),
				'id_page'		=> $data['id_page'],
				'type'			=> 'reply',
				'content'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus',
				'date'			=> date('Y-m-d h:i:s'),
				'page'			=> $data['page'],
				'seen'			=> 0,
			];
			NotificationsCModel::insert_notification($data);
		}

		$data = [
			'user' => UsersQModel::get_user_by_id(Auth::id())
		];
		return $data;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_like_comment($id_comment)
	{
		$comment = CommentsQModel::get_comment_by_id($id_comment);

		$data = ['like' => $comment->like + 1];
		CommentsCModel::update_comment($id_comment, $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ajax_dislike_comment($id_comment)
	{
		$comment = CommentsQModel::get_comment_by_id($id_comment);

		$data = ['dislike' => $comment->dislike + 1];
		CommentsCModel::update_comment($id_comment, $data);
	}
}
