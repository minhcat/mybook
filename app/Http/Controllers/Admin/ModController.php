<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersPunishQModel;
use App\Http\Models\QModels\UsersBanQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\UsersBModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Factory;

use Illuminate\Http\Request;

class ModController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function mod() {
		$user_id = 13;
		$data['user']                  = UsersQModel::get_user_by_id($user_id);
		$data['new_comments']          = CommentsBModel::get_new_comments_mod(5);
		$data['report_comments']       = CommentsBModel::get_new_comments_report();
		$data['checkword_comments']    = CommentsBModel::get_comments_checkword();
		$data['save_comments']         = CommentsBModel::get_comments_save($user_id);
		$data['users_follow']          = UsersBModel::get_user_follow($user_id);
		$data['users_punish']          = UsersPunishQModel::get_user_punish_by_user_mod_id($user_id);
		$data['users_ban']             = UsersBanQModel::get_user_ban_by_user_mod_id($user_id);
		$data['books_follow']          = BooksBModel::get_books_follow_admin($user_id);
		$data['checkwords']            = CommentsBModel::get_checkword_with_number_comments_have();
		$data['comments_books_follow'] = CommentsBModel::get_comments_in_books_follow($data['books_follow']);
		// dd($data);
		return view('pages.admin.mod', $data);
	}
}