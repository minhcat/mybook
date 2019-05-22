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
}
