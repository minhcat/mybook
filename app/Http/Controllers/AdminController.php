<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function mod()
	{
		return view('pages.admin.mod');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function uploader()
	{
		return view('pages.admin.uploader');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function statistic()
	{
		return view('pages.admin.statistic');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function admin()
	{
		return view('pages.admin.admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function super_admin()
	{
		return view('pages.admin.super-admin');
	}
}
