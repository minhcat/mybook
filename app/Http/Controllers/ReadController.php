<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\CommentsBModel;
use App\Http\Models\BooksQModel;
use App\Http\Models\ChapsQModel;
use App\Http\Models\TransQModel;
use App\Http\Models\ImagesQModel;

use Illuminate\Http\Request;

class ReadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($book_slug, $trans_slug, $chap_slug)
	{
		$book = BooksQModel::get_book_by_slug($book_slug);
		// dd($book);
		$trans = TransQModel::get_trans_by_slug($trans_slug);
		// dd($trans);
		$chap = ChapsQModel::get_chap_by_book_id_trans_id_chap_slug($book->id, $trans->id, $chap_slug);
		// dd($chap);
		$data['images'] = ImagesQModel::get_images_by_chap_id($chap->id);
		$data['book']['name']  = $book->name;
		$data['trans']['name'] = $trans->name;
		$data['chap']['name']  = $chap->name;
		$data['book']['slug']  = $book_slug;
		$data['trans']['slug'] = $trans_slug;
		$data['chap']['slug']  = $chap_slug;

		// dd($data);

		$data['comments'] = CommentsBModel::get_comments_page($chap->id, 'read');
		$data['large_comment'] = 0 ; //set css

		$data['random_books'] = BooksQModel::get_books_random(10);

		return view('pages.read', $data);
	}
}
