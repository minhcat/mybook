<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\BooksQModel;
use App\Http\Models\ChapsQModel;

use Illuminate\Http\Request;

class DetailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function author()
	{
		return view('pages.detail.detail-author');
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
		// dd($data);
		return view('pages.detail.detail-book', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function character()
	{
		return view('pages.detail.detail-character');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function user()
	{
		return view('pages.detail.detail-user');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function trans()
	{
		return view('pages.detail.detail-trans');
	}
}
