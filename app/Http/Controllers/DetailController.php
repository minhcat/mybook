<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
	public function book()
	{
		return view('pages.detail.detail-book');
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
