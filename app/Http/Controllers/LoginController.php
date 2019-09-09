<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Models\QModels\UsersQModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function login() {
		// header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		$data = CommonController::get_data_sidebar($data);

		return view('pages.login.login', $data);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function sign_up() {
		// header and footer
		$data = [];
		$data = CommonController::get_data_header($data);

		$data = CommonController::get_data_sidebar($data);

		return view('pages.login.sign-up', $data);
	}

	/**
	 * Show the application dashboard to the user.
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

		if (Auth::attempt(['name_login' => $user, 'password' => $password])) {
			return redirect('/');
		} else {
			return redirect()->back()->with('error', 'Tài khoản đăng nhập hoặc mật khẩu không đúng');
		}
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function logout(Request $request) {
		Auth::logout();
		return redirect()->back();
	}
}