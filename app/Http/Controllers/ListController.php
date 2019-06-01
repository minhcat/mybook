<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\BooksQModel;
use App\Http\Helpers\Helper;
use App\Http\Helpers\Constants;

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
	public function comment(Request $request)
	{
		$data['books'] = BooksQModel::get_books_list_comment(Constants::BOOKS_ITEM_LIST);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$page = $request->input('page');
		if ($page == null) 
			$data['books'] = Helper::add_background($data['books'], $background);
		else
			$data['books'] = Helper::add_background_else($data['books'], 'bg-gray', Constants::BOOKS_ITEM_LIST*($page - 1));
		
		// dd($data['books']);

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
	public function rate(Request $request)
	{
		$data['books'] = BooksQModel::get_books_list_rate(Constants::BOOKS_ITEM_LIST);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$page = $request->input('page');
		if ($page == null) 
			$data['books'] = Helper::add_background($data['books'], $background);
		else
			$data['books'] = Helper::add_background_else($data['books'], 'bg-gray', Constants::BOOKS_ITEM_LIST*($page - 1));
		

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
		$data['books'] = BooksQModel::get_books_list_update(Constants::BOOKS_ITEM_LIST);
		return view('pages.list.list-update', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function view(Request $request)
	{
		$data['books'] = BooksQModel::get_books_list_view(Constants::BOOKS_ITEM_LIST);
		$background = ['bg-red', 'bg-blue', 'bg-green', 'bg-orange', 'bg-gray'];
		$page = $request->input('page');
		if ($page == null) 
			$data['books'] = Helper::add_background($data['books'], $background);
		else
			$data['books'] = Helper::add_background_else($data['books'], 'bg-gray', Constants::BOOKS_ITEM_LIST*($page - 1));

		return view('pages.list.list-view', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function year($year)
	{
		$data['books'] = BooksQModel::get_books_list_year($year, Constants::BOOKS_ITEM_LIST);
		$data['year'] = $year;
		// dd($data);
		return view('pages.list.list-year', $data);
	}
}
