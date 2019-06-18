<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\CommentsQModel;
use App\Http\Models\BModels\CommentsBModel;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function mod()
	{
		$user_id = 13;
		$user = UsersQModel::get_user_by_id($user_id);
		$comments = CommentsBModel::get_new_comments_mod(5);
		$data['user'] = $user;
		$data['new_comments'] = $comments;
		// dd($data);
		return view('pages.admin.mod', $data);
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
