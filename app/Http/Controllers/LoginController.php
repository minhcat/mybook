<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersSettingQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\CModels\UsersCModel;
use App\Http\Models\CModels\UsersCategoryCModel;
use App\Http\Models\CModels\UsersSettingCModel;
use App\Http\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Storage;
use Hash;

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
		//user login
		$data = CommonController::get_data_auth($data);

		$data['page'] = 'login';

		return view('pages.login.login', $data);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function sign_up() {
		if (!Session::has('errors')) {
			Session::forget('user-image');
		}
		
		// dd($file);

		// header and footer
		$data = [];
		$data = CommonController::get_data_header($data);
		//user login
		$data = CommonController::get_data_auth($data);

		$data['categories'] = CategoriesQModel::get_categories_all();

		$data['page'] = 'sign-up';

		return view('pages.login.sign-up', $data);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function edit_info() {
		if (!Session::has('errors')) {
			Session::forget('user-image');
		}
		// header and footer
		$data = [];
		$data = CommonController::get_data_header($data);
		//user login
		$data = CommonController::get_data_auth($data);

		$data['categories'] = CategoriesQModel::get_categories_all();

		$data['user'] = UsersQModel::get_user_by_id(Auth::id());
		$data['user'] = Helper::add_category_for_user($data['user']);

		// dd($data);

		return view('pages.login.edit-info', $data);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function change_password() {
		// header and footer
		$data = [];
		$data = CommonController::get_data_header($data);
		//user login
		$data = CommonController::get_data_auth($data);

		$data['user'] = UsersQModel::get_user_by_id(Auth::id());

		// dd($data);

		return view('pages.login.change-password', $data);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function setting() {
		// header and footer
		$data = [];
		$data = CommonController::get_data_header($data);
		//user login
		$data = CommonController::get_data_auth($data);

		$data['user'] = UsersQModel::get_user_by_id(Auth::id());

		$data['setting'] = UsersSettingQModel::get_user_setting_by_user_id(Auth::id());

		if ($data['setting'] == null) {
			$data['setting'] = new \stdClass;
			$data['setting']->noti_admin = 1;
			$data['setting']->noti_user  = 1;
			$data['setting']->noti_item  = 1;
			$data['setting']->info       = 'all';
			$data['setting']->tag        = 'all';
			$data['setting']->friend     = 'all';
		}

		// dd($data);

		return view('pages.login.setting', $data);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function post_login(Request $request) {
		// dd($request->all());
		$validate = [
			'user' => 'required',
			'password' => 'required'
		];
		$this->validate($request, $validate);

		$user = $request->input('user');
		$password = $request->input('password');
		$remember = ($request->input('remember') != null) ? true : false;

		if (Auth::attempt(['name_login' => $user, 'password' => $password], $remember)) {
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
		// dd($request->all());
		// upload image temporary
		if ($request->hasFile('image')) {
			$data['image'] = $request->file('image');
			$data['name']  = 'user';
			$data['path']  = '/image/upload';
			Images::upload_image($data);
			Session::put('user-image',true);
		}

		$validate = [
			'name_login'	=> 'required',
			'name'			=> 'required',
			'password'		=> 'required',
			'repassword'	=> 'required',
			'email'			=> 'required|email'
		];
		$this->validate($request, $validate);

		// check name
		$name       = $request->input('name');
		$name_login = $request->input('name_login');
		$check_name = UsersQModel::get_user_by_name_login($name_login);
		if ($check_name != null) {
			return redirect()->back()->withErrors('tên đăng nhập bị trùng')->withInput();
		}
		$check_name = UsersQModel::get_user_by_name($name);
		if ($check_name != null) {
			return redirect()->back()->withErrors('tên hiển thị bị trùng')->withInput();
		}

		// check password
		$password	= $request->input('password');
		$repassword	= $request->input('repassword');
		if ($password != $repassword) {
			return redirect()->back()->withErrors('password không trùng')->withInput();
		}

		// data image upload
		if ($request->hasFile('image')) {
			$data['image'] = $request->file('image');
			$data['name']  = $request->input('name_login');
			$data['path']  = '/image/users';
			Images::upload_image($data);
		} else if (Session::has('user-image')) {
			$name  = $request->input('name_login');
			Storage::disk('image')->copy('/upload/user.jpg', '/users/'.$name.'.jpg');
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

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function post_edit_info($user_id, Request $request) {
		// dd($request->all());
		if ($request->hasFile('image')) {
			$data['image'] = $request->file('image');
			$data['name']  = 'user';
			$data['path']  = '/image/upload';
			Images::upload_image($data);
			Session::put('user-image',true);
		}
		
		$validate = [
			'name'			=> 'required',
			'email'			=> 'required|email'
		];
		$this->validate($request, $validate);

		// check name
		$name       = $request->input('name');
		$user = UsersQModel::get_user_by_name($name);
		if ($user != null && $user->id != $user_id) {
			return redirect()->back()->withErrors('tên hiển thị bị trùng')->withInput();
		}

		// data image upload
		if (Session::has('user-image')) {
			$name  = $user->image;
			Storage::disk('image')->copy('/upload/user.jpg', '/users/'.$name.'.jpg');
		}

		// create user
		$data = [
			'name'			=> $request->input('name'),
			'email'			=> $request->input('email'),
			'nickname'		=> $request->input('nickname'),
			'genitive'		=> $request->input('genitive'),
			'facebook'		=> $request->input('facebook'),
			'twitter'		=> $request->input('twitter'),
			'slogan'		=> $request->input('slogan'),
			'description'	=> $request->input('description'),
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
		// dd($data);
		UsersCModel::update_user($user_id, $data);

		// set category
		UsersCategoryCModel::delete_user_category_by_user_id($user_id);
		$categories = json_decode($request->input('category'));
		// dd($categories);
		foreach ($categories as $category) {
			$data = ['id_user' => $user_id, 'id_category' => $category];
			UsersCategoryCModel::insert_user_category($data);
		}
		$user = UsersQModel::get_user_by_id($user_id);
		
		return redirect('/detail/user/'.$user->name_login)->with('success', 'Bạn đã thay đổi thông tin thành công');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function post_change_password($user_id, Request $request) {
		// dd($request->all());
		
		$validate = [
			'old-password'	=> 'required',
			'new-password'	=> 'required',
			'repassword'	=> 'required',
			'code'			=> 'required'
		];
		$this->validate($request, $validate);

		// check old password
		$user = UsersQModel::get_user_by_id($user_id);
		$old_pass = $request->input('old-password');
		if (!Hash::check($old_pass, $user->password)) {
			return redirect()->back()->withErrors('Mật khẩu cũ không đúng')->withInput();
		}
		// check repassword
		$new_pass = $request->input('new-password');
		$repass   = $request->input('repassword');
		if ($new_pass != $repass) {
			return redirect()->back()->withErrors('Mật khẩu không trùng')->withInput();
		}
		// check code
		$code = $request->input('code');
		if ($code != 'AT4G5') {
			return redirect()->back()->withErrors('Mã xác nhận không đúng')->withInput();
		}

		// update password
		$data = [
			'password' => bcrypt($new_pass),
		];
		UsersCModel::update_user($user_id, $data);
		
		return redirect('/detail/user/'.$user->name_login)->with('success', 'Bạn đã thay đổi mật khẩu thành công');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function post_setting($user_id, Request $request) {
		// dd($request->all());
		$data = [
			'noti_admin' => ($request->input('noti-admin') == null) ? 0 : 1,
			'noti_user'  => ($request->input('noti-user') == null) ? 0 : 1,
			'noti_item'  => ($request->input('noti-item') == null) ? 0 : 1,
			'info'       => $request->input('info-me'),
			'tag'        => $request->input('tag-me'),
			'friend'     => $request->input('add-friend'),
		];
		// dd($data);
		$user_setting = UsersSettingQModel::get_user_setting_by_user_id($user_id);
		if ($user_setting == null) {
			$data['id_user'] = $user_id;
			UsersSettingCModel::insert_user_setting($data);
		} else {
			UsersSettingCModel::update_user_setting($user_setting->id, $data);
		}
		return redirect()->back()->with('success', 'Thay đổi thành công');
	}
}