<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\AuthorsQModel;
use App\Http\Models\BooksQModel;
use App\Http\Models\UsersQModel;
use App\Http\Models\ChapsQModel;
use App\Http\Models\TransQModel;
use App\Http\Models\CharactersQModel;

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
		
		// dd($data);
		return view('pages.detail.detail-trans', $data);
	}
}
