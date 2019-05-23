<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
		return view('pages.list.list-comment');
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
}
