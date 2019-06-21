<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\BModels\UsersBModel;
use App\Http\Models\QModels\UsersPunishQModel;
use App\Http\Models\QModels\UsersBanQModel;
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
		$user               = UsersQModel::get_user_by_id($user_id);
		$new_comments       = CommentsBModel::get_new_comments_mod(5);
		$report_comments    = CommentsBModel::get_new_comments_report();
		$checkword_comments = CommentsBModel::get_comments_checkword();
		$save_comments      = CommentsBModel::get_comments_save($user_id);
		$users_follow       = UsersBModel::get_user_follow($user_id);
		$users_punish       = UsersPunishQModel::get_user_punish_by_user_mod_id($user_id);
		$users_ban          = UsersBanQModel::get_user_ban_by_user_mod_id($user_id);
		$books_follow       = BooksBModel::get_books_follow_admin($user_id);
		// dd($users_ban);
		
		$data['user']               = $user;
		$data['new_comments']       = $new_comments;
		$data['report_comments']    = $report_comments;
		$data['checkword_comments'] = $checkword_comments;
		$data['save_comments']      = $save_comments;
		$data['users_follow']       = $users_follow;
		$data['users_punish']       = $users_punish;
		$data['users_ban']          = $users_ban;
		$data['books_follow']       = $books_follow;
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
