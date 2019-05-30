<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\BooksQModel;
use App\Http\Helpers\Helper;

use Illuminate\Http\Request;

class ListController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function category()
	{
		return view('pages.list.list-category');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function comment()
	{
		$data['books'] = BooksQModel::get_books_sort_comment(12);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$data['books'] = Helper::add_background($data['books'], $background);
		return view('pages.list.list-comment', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function completed()
	{
		return view('pages.list.list-completed');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function follow()
	{
		return view('pages.list.list-follow');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function friend()
	{
		return view('pages.list.list-friend');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function notification()
	{
		return view('pages.list.list-notification');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function process()
	{
		return view('pages.list.list-process');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function rate()
	{
		$data['books'] = BooksQModel::get_books_sort_rate(12);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$data['books'] = Helper::add_background($data['books'], $background);
		return view('pages.list.list-rate', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function search()
	{
		return view('pages.list.list-search');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function update()
	{
		$data['books'] = BooksQModel::get_books_sort_update(12);
		return view('pages.list.list-update', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function view()
	{
		$data['books'] = BooksQModel::get_books_sort_view(12);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$data['books'] = Helper::add_background($data['books'], $background);

		return view('pages.list.list-view', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function year()
	{
		return view('pages.list.list-year');
	}
}
