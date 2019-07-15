<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\CommentsQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\CommentsBModel;

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
		$data['author']  = AuthorsQModel::get_author_by_slug($slug);
		$data['books']   = BooksQModel::get_books_by_author_id($data['author']->id);
		$data['sidebar'] = ['random-book', 'new-comment', 'facebook'];

		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);

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
		$array_trans = ChapsQModel::get_trans_id_by_book_id($book->id);
		// dd($trans_id);
		foreach ($array_trans as $trans) {
			$chaps[$trans->id_trans] = ChapsQModel::get_chaps_by_book_id_trans_id($book->id, $trans->id_trans);
		}

		$data['book']  = $book;
		$data['chaps_trans'] = $chaps;
		$data['sidebar'] = ['random-book', 'new-comment', 'facebook'];

		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);

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
		$data['character'] = CharactersQModel::get_character_by_slug($slug);
		$data['sidebar'] = ['random-book', 'new-comment', 'facebook'];

		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);
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
		$data['user'] = UsersQModel::get_user_by_name_login($slug);
		$data['sidebar'] = ['random-book', 'new-comment', 'facebook'];

		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);
		
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
		$data['trans'] = TransQModel::get_trans_by_slug($slug);
		$data['books'] = TransQModel::get_books_by_trans_id($data['trans']->id);
		$data['sidebar'] = ['random-book', 'new-comment', 'facebook'];
		
		$data['random_book'] = BooksBModel::get_books_random_sidebar(6);

		$data['new_comment'] = CommentsBModel::get_new_comments_sidebar(6);

		$data['comments'] = CommentsBModel::get_comments_page($data['trans']->id, 'trans');
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
		$item->id = $data['trans']->id;
		$item->page = 'trans';
		$item->time = time();
		$item = json_encode($item);
		array_push($history, $item);

		$history = json_encode($history);
		// dd($history);

		Cookie::queue('history',$history, 1440);
		dd($data);
		return view('pages.detail.detail-trans', $data);
	}
}
