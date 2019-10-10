<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersPunishQModel;
use App\Http\Models\QModels\UsersBanQModel;
use App\Http\Models\QModels\CommentsSaveQModel;
use App\Http\Models\QModels\MailsQModel;
use App\Http\Models\QModels\NotificationsAdminQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\UsersBModel;
use App\Http\Models\CModels\CommentsSaveCModel;
use App\Http\Models\CModels\UsersPunishCModel;
use App\Http\Models\CModels\UsersBanCModel;
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
		$data['mails']			= MailsQModel::get_mails_not_seen_by_user_id($user_id);
		$data['notifications']	= NotificationsAdminQModel::get_notifications_not_seen_by_user_id($user_id);
		// dd($data);
		return view('pages.admin.mod', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function add_list_save($id_comment) {
		// check comment in data
		$comment = CommentsSaveQModel::get_comments_save_by_comment_id($id_comment);
		if (!empty($comment)) {
			return;
		}
		$data = [
			'id_comment'  => $id_comment,
			'id_user_mod' => 13,
			'date'        => date('Y-m-d H:i:s')
		];
		CommentsSaveCModel::insert_comment($data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function punish_user($id_user, Request $request) {
		// dd($request->all());
		$id_comment = $request->input('id_comment');
		$time_punish = $request->input('time');
		$users_punish = UsersPunishQModel::get_user_punish_by_user_id($id_user);
		if (empty($users_punish)) {
			$data = [
				'id_user_punish' => $id_user,
				'id_user_mod'    => 13,
				'id_comment'     => $id_comment,
				'time_punish'    => $time_punish,
				'date'           => date('Y-m-d H:i:s')
			];
			UsersPunishCModel::insert_user_punish($data);
		} else {
			$data = [
				'id_user_punish' => $id_user,
				'id_user_mod'    => 13,
				'id_comment'     => $id_comment,
				'time_punish'    => $time_punish,
				'date'           => date('Y-m-d H:i:s')
			];
			UsersPunishCModel::update_user_punish($users_punish[0]->id, $data);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ban_user($id_user, Request $request) {
		dd($request->all());
		$id_comment = $request->input('id_comment');
		$users_ban = UsersBanQModel::get_user_ban_by_user_id($id_user);
		if (empty($users_ban)) {
			$data = [
				'id_user_ban' => $id_user,
				'id_user_mod' => 13,
				'id_comment'  => $id_comment,
				'date'        => date('Y-m-d H:i:s')
			];
			UsersBanCModel::insert_user_ban($data);
		}
	}
}