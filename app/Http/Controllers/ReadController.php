<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\QModels\ImagesQModel;

use Illuminate\Http\Request;
use Cookie;

class ReadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($book_slug, $trans_slug, $chap_slug)
	{
		$data = [];
		//system
		$data = CommonController::get_data_header($data);
		//user login
		$data = CommonController::get_data_auth($data);
		//data system sidebar
		$data = CommonController::get_data_home_sidebar($data);
		
		$book = BooksQModel::get_book_by_slug($book_slug);
		// dd($book);
		$trans = TransQModel::get_trans_by_slug($trans_slug);
		// dd($trans);
		$chap = ChapsQModel::get_chap_by_book_id_trans_id_chap_slug($book->id, $trans->id, $chap_slug);
		// dd($chap);
		$data['page']   = 'chap';
		$data['images'] = ImagesQModel::get_images_by_chap_id($chap->id);
		$data['book']['name']  = $book->name;
		$data['trans']['name'] = $trans->name;
		$data['chap']['id']    = $chap->id;
		$data['chap']['name']  = $chap->name.' - '.$chap->title;
		$data['book']['slug']  = $book_slug;
		$data['trans']['slug'] = $trans_slug;
		$data['chap']['slug']  = $chap_slug;
		$data['chap']['index'] = $chap->index;

		//get next chap and previous chap
		$next     = ChapsQModel::get_chap_by_index($book->id, $trans->id, $chap->index - 1);
		$previous = ChapsQModel::get_chap_by_index($book->id, $trans->id, $chap->index + 1);
		if ($next == null) {
			$data['chap']['next'] = 'none';
		} else {
			$data['chap']['next'] = $next->slug;
		}
		if ($previous == null) {
			$data['chap']['previous'] = 'none';
		} else {
			$data['chap']['previous'] = $previous->slug;
		}

		// dd($data);

		$data['comments'] = CommentsBModel::get_comments_page($chap->id, 'read');
		$data['large_comment'] = 0 ; //set css

		$data['random_books'] = BooksQModel::get_books_random(10);

		// set cookie history
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
		$item->id = $chap->id;
		$item->page = 'read';
		$item->time = time();
		$item = json_encode($item);
		array_push($history, $item);

		$history = json_encode($history);
		// dd($history);

		Cookie::queue('history',$history, 1440);

		return view('pages.read', $data);
	}
}
