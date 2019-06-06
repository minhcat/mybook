<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\BooksQModel;
use App\Http\Models\CategoriesQModel;
use App\Http\Helpers\Helper;
use App\Http\Helpers\Constants;

use Illuminate\Http\Request;

class ListController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function category($category)
	{
		$data['books'] = BooksQModel::get_books_list_category($category, Constants::BOOKS_ITEM_LIST);
		$data['category'] = CategoriesQModel::get_category_by_name($category);
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook', 'advertisement'];
		// dd($data);
		return view('pages.list.list-category', $data);
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
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook', 'advertisement'];
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
		$data['status'] = Constants::STATUS_COMPLETED;
		$data['books']  = BooksQModel::get_books_list_status(Constants::STATUS_COMPLETED, Constants::BOOKS_ITEM_LIST);
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook', 'advertisement'];

		return view('pages.list.list-completed', $data);
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
		$data['status'] = Constants::STATUS_PROCESS;
		$data['books']  = BooksQModel::get_books_list_status(Constants::STATUS_PROCESS, Constants::BOOKS_ITEM_LIST);
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook', 'advertisement'];

		return view('pages.list.list-process', $data);
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
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook', 'advertisement'];

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
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook', 'advertisement'];

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
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook', 'advertisement'];

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
		$data['sidebar'] = ['top-view', 'random-book', 'new-comment', 'facebook', 'advertisement'];
		// dd($data);
		return view('pages.list.list-year', $data);
	}
}
