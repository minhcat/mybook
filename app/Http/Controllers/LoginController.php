<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\CModels\UsersCModel;
use App\Http\Models\CModels\UsersCategoryCModel;
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

		$data = CommonController::get_data_list_sidebar($data);

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

		$data['categories'] = CategoriesQModel::get_categories_all();

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

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function post_sign_up(Request $request) {
		// dd($request);
		$validate = [
			'name_login'	=> 'required',
			'name'			=> 'required',
			'password'		=> 'required',
			'repassword'	=> 'required',
			'email'			=> 'required|email'
		];
		$this->validate($request, $validate);

		// data image upload
		$data['image'] = $request->file('image');
		$data['name']  = $request->input('name_login');
		$data['path']  = '/image/users';
		Images::upload_image($data);

		// check password
		$password	= $request->input('password');
		$repassword	= $request->input('repassword');
		if ($password != $repassword) {
			return redirect()->back()->withErrors('password không trùng');
		}

		// create user
		$data = [
			'name_login'	=> $request->input('name_login'),
			'name'			=> $request->input('name'),
			'password'		=> bcrypt($request->input('password')),
			'email'			=> $request->input('email'),
			'nickname'		=> $request->input('nickname'),
			'genitive'		=> $request->input('genitive'),
			'facebook'		=> $request->input('facebook'),
			'twitter'		=> $request->input('twitter'),
			'slogan'		=> $request->input('slogan'),
			'description'	=> $request->input('description'),
			'create_at'		=> date('Y-m-d'),
		];
		// set birth
		$year  = $request->input('year');
		$month = $request->input('month');
		$date  = $request->input('date');
		$data['birth'] = $year.'-'.$month.'-'.$date;
		// set gender
		$gender = $request->input('gender');
		if ($gender == '') {
			$data['gender'] = 2;
		} else {
			$data['gender'] = $gender;
		}
		$user_id = UsersCModel::insert_user($data);
		// set category
		$categories = json_decode($request->input('category'));
		foreach ($categories as $category) {
			$data = ['id_user' => $user_id, 'id_category' => $category];
			UsersCategoryCModel::insert_user_category($data);
		}

		return redirect('login')->with('success', 'Bạn đã đăng ký thành công, mời bạn đăng nhập vào hệ thống');
	}
}