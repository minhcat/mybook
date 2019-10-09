<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksApprovedQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\CommentsReportQModel;
use App\Http\Models\QModels\BooksErrorQModel;
use App\Http\Models\QModels\MailsQModel;
use App\Http\Models\QModels\NotificationsAdminQModel;
use App\Http\Models\BModels\TransBModel;
use App\Http\Models\BModels\CharactersBModel;
use App\Http\Models\BModels\AuthorsBModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\CModels\BooksApprovedCModel;
use App\Http\Models\CModels\UsersPunishCModel;
use App\Http\Models\CModels\MailsCModel;
use App\Http\Models\CModels\NotificationsAdminCModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function admin() {
		$user_id = 16;
		$data['user']			= UsersQModel::get_user_by_id($user_id);
		$data['transes']		= TransBModel::get_transes_all();
		$data['characters']		= CharactersBModel::get_characters_all();
		$data['categories']		= CategoriesQModel::get_categories_all();
		$data['books_error']	= BooksErrorQModel::get_books_error_by_uploader_id($user_id);
		$data['authors_detail']	= AuthorsBModel::get_authors_all();
		$data['books_approve']	= BooksQModel::get_books_not_approved_all();
		$data['users_approve']	= CommentsReportQModel::get_comments_report_with_punish();
		$data['admins']			= UsersQModel::get_users_all();
		$data['mails']			= MailsQModel::get_mails_not_seen_by_user_id($user_id);
		$data['notifications']	= NotificationsAdminQModel::get_notifications_not_seen_by_user_id($user_id);
		// dd($data);
		return view('pages.admin.admin', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function set_admin() {
		$user = UsersQModel::get_user_by_id(Auth::id());
		if ($user->admin == 'mod') {
			return redirect('/admin/mod');
		} elseif ($user->admin == 'uploader') {
			return redirect('/admin/uploader');
		} elseif ($user->admin == 'admin') {
			return redirect('/admin/admin');
		} elseif ($user->admin == 'super-admin') {
			return redirect('/admin/super-admin');
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login() {
		return view('pages.admin.login');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function post_login(Request $request) {
		$validate = [
			'user' => 'required',
			'password' => 'required'
		];
		$this->validate($request, $validate);

		$user = $request->input('user');
		$password = $request->input('password');
		$remember = ($request->input('remember') != null) ? true : false;

		if (Auth::attempt(['name_login' => $user, 'password' => $password], $remember)) {
			$user = UsersQModel::get_user_by_id(Auth::id());
			if ($user->admin == null) {
				Auth::logout();
				return redirect()->back()->with('error', 'Tài khoản đăng nhập hoặc mật khẩu không đúng');
			} else {
				return redirect('/admin');
			}
		} else {
			return redirect()->back()->with('error', 'Tài khoản đăng nhập hoặc mật khẩu không đúng');
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function approve_book($book_id) {
		$data = [
			'approved' => 1
		];
		BooksCModel::update_book($book_id, $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function approve_user($comment_report_id) {
		$report_data = CommentsReportQModel::get_comment_report_by_id($comment_report_id);
		$punish = (int)$report_data->punish[0];
		$punish = ($report_data->punish[1] == 'd') ? $punish : (($report_data->punish[1] == 'w') ? $punish * 7 : (($report_data->punish[1] == 'm') ? $punish * 30 : 0));
		$data = [
			'id_user_punish' => $report_data->id_user,
			'id_user_mod'    => $report_data->id_admin,
			'id_comment'     => $report_data->id_comment,
			'time_punish'    => $punish,
			'date'			 => date('Y-m-d H:i:s'),
		];
		UsersPunishCModel::insert_user_punish($data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function reply_book($book_id, $content) {
		$book_id = (int)$book_id;
		$book_approved	= BooksApprovedQModel::get_book_approved_by_book_id($book_id);
		$book			= BooksQModel::get_book_by_id_not_approved($book_id);
		if ($book_approved == null) {
			$data = [
				'id_book'  => $book_id,
				'id_admin' => $book->id_uploader,
				'reply'    => $content,
				'status'   => 'reply',
				'call'     => 0,
				'date'     => $book->create_at,
			];
			BooksApprovedCModel::insert_book_approved($data);
		} else {
			$data = [
				'reply' => $content,
			];
			BooksApprovedCModel::update_book_approved($book_approved->id, $data);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function reply_user($user_id, $content) {
		
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function post_mail(Request $request) {
		$data = [
			'id_admin' => (int)$request->input('id_admin'),
			'id_user'  => (int)$request->input('id_user'),
			'title'    => $request->input('title'),
			'content'  => $request->input('content'),
			'date'     => date('Y-m-d'),
		];
		MailsCModel::insert_mail($data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function post_noti(Request $request) {
		//check select user or all
		$input = $request->input('user');
		$id_user = null;
		if ($input == 'super-all' || $input == 'all')
			$send = $input;
		else {
			$send = 'user';
			$id_user = (int)$input;
		}

		$data = [
			'id_admin' => (int)$request->input('id_admin'),
			'id_user'  => $id_user,
			'type'     => $request->input('type'),
			'title'    => $request->input('title'),
			'content'  => $request->input('content'),
			'sendto'   => $send,
			'date'     => date('Y-m-d'),
		];
		// dd($data);
		NotificationsAdminCModel::insert_notification($data);
	}
}