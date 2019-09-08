<?php 
namespace App\Http\Controllers;

use App\Http\Models\QModels\UsersQModel;

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
}