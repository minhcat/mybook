<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\AuthorsQModel;
use App\Http\Models\BooksQModel;
use App\Http\Models\UsersQModel;
use App\Http\Models\ChapsQModel;
use App\Http\Models\TransQModel;
use App\Http\Models\CharactersQModel;
use App\Http\Models\CommentsQModel;

use Illuminate\Http\Request;

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

		$data['random_book'] = BooksQModel::get_books_random(6);
		foreach ($data['random_book'] as $key => $rd_book) {
			if (strlen($rd_book->name) >= 22)
				$rd_book->name = substr($rd_book->name, 0, 20).'...';
			$rd_book->description = substr($rd_book->description, 0, 45).'...';
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

		$data['comments'] = CommentsQModel::get_comments_by_author_id($data['author']->id);
		foreach ($data['comments'] as $comment) {
			$reply = CommentsQModel::get_comments_author_reply_by_user_id($comment->id_user, $data['author']->id);
			$comment->reply = $reply;
		}
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

		$data['random_book'] = BooksQModel::get_books_random(6);
		foreach ($data['random_book'] as $key => $rd_book) {
			if (strlen($rd_book->name) >= 22)
				$rd_book->name = substr($rd_book->name, 0, 20).'...';
			$rd_book->description = substr($rd_book->description, 0, 45).'...';
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

		$data['comments'] = CommentsQModel::get_comments_by_book_id($book->id);
		foreach ($data['comments'] as $comment) {
			// dd($book->id);
			// dd($comment->id_user);
			$reply = CommentsQModel::get_comments_book_reply_by_user_id($comment->id_user, $book->id);
			$comment->reply = $reply;
		}
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

		$data['random_book'] = BooksQModel::get_books_random(6);
		foreach ($data['random_book'] as $key => $rd_book) {
			if (strlen($rd_book->name) >= 22)
				$rd_book->name = substr($rd_book->name, 0, 20).'...';
			$rd_book->description = substr($rd_book->description, 0, 45).'...';
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

		//data comment
		$data['comments'] = CommentsQModel::get_comments_by_character_id($data['character']->id);
		foreach ($data['comments'] as $comment) {
			$reply = CommentsQModel::get_comments_character_reply_by_user_id($comment->id_user, $data['character']->id);
			$comment->reply = $reply;
		}
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

		$data['random_book'] = BooksQModel::get_books_random(6);
		foreach ($data['random_book'] as $key => $rd_book) {
			if (strlen($rd_book->name) >= 22)
				$rd_book->name = substr($rd_book->name, 0, 20).'...';
			$rd_book->description = substr($rd_book->description, 0, 45).'...';
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
		
		//data comment
		$data['comments'] = CommentsQModel::get_comments_by_user_id($data['user']->id);
		foreach ($data['comments'] as $comment) {
			$reply = CommentsQModel::get_comments_user_reply_by_user_id($comment->id_user, $data['user']->id);
			$comment->reply = $reply;
		}
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
		
		$data['random_book'] = BooksQModel::get_books_random(6);
		foreach ($data['random_book'] as $key => $rd_book) {
			if (strlen($rd_book->name) >= 22)
				$rd_book->name = substr($rd_book->name, 0, 20).'...';
			$rd_book->description = substr($rd_book->description, 0, 45).'...';
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

		$data['comments'] = CommentsQModel::get_comments_by_trans_id($data['trans']->id);
		foreach ($data['comments'] as $comment) {
			$reply = CommentsQModel::get_comments_trans_reply_by_user_id($comment->id_user, $data['trans']->id);
			$comment->reply = $reply;
		}
		// dd($data);
		return view('pages.detail.detail-trans', $data);
	}
}
