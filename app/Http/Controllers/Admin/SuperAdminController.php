<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersPunishQModel;
use App\Http\Models\QModels\UsersBanQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\SystemQModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\CModels\UsersCModel;
use App\Http\Models\CModels\ChapsCModel;
use App\Http\Models\CModels\SystemCModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\TransBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\UsersBModel;
use App\Http\Models\BModels\AuthorsBModel;
use App\Http\Models\BModels\SystemBModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Factory;

use Illuminate\Http\Request;

class SuperAdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function super_admin() {
		$user_id = 16;
		$data['user']			= UsersQModel::get_user_by_id($user_id);
		$data['books_upload']	= BooksBModel::get_books_upload($user_id);
		$data['categories']		= CategoriesQModel::get_categories_all();
		$data['characters']		= CharactersQModel::get_characters_all();
		$data['transes']		= TransBModel::get_transes_all();
		$data['authors']		= AuthorsQModel::get_authors_all();
		$data['artists']		= AuthorsQModel::get_artists_all();
		$data['authors_detail']	= AuthorsBModel::get_authors_all();
		$data['books']			= BooksBModel::get_all_books();
		$data['books_delete']   = BooksBModel::get_all_books_delete();
		$data['admins']			= UsersQModel::get_users_all();
		$data['system']			= SystemBModel::get_variables_super_admin();
		// dd($data);
		return view('pages.admin.super-admin', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function delete_book_temporary($id_book) {
		$data = ['deleted' => 1];
		BooksCModel::update_book($id_book, $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function delete_book_permanent($id_book) {
		ChapsCModel::delete_chap_by_book_id($id_book);
		BooksCModel::delete_book($id_book);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function restore_book($id_book) {
		$data = ['deleted' => 0];
		BooksCModel::update_book($id_book, $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function permiss_admin($id_admin, $access) {
		$data = ['admin' => $access];
		UsersCModel::update_user($id_admin, $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function edit_system_common(Request $request) {
		// website name
		$id_webiste_name = SystemQModel::get_variable_by_name('website_name')->id;
		$website_name    = $request->input('website_name');
		$data = ['value' => $website_name];
		SystemCModel::update_variable($id_webiste_name, $data);

		// slogan
		$id_slogan = SystemQModel::get_variable_by_name('slogan')->id;
		$slogan    = $request->input('slogan');
		$data = ['value' => $slogan];
		SystemCModel::update_variable($id_slogan, $data);

		// footer link name 1
		$id_footer_link_name_1 = SystemQModel::get_variable_by_name('footer_link_name_1')->id;
		$footer_link_name_1    = $request->input('footer_link_name_1');
		$data = ['value' => $footer_link_name_1];
		SystemCModel::update_variable($id_footer_link_name_1, $data);

		// footer link name 2
		$id_footer_link_name_2 = SystemQModel::get_variable_by_name('footer_link_name_2')->id;
		$footer_link_name_2    = $request->input('footer_link_name_2');
		$data = ['value' => $footer_link_name_2];
		SystemCModel::update_variable($id_footer_link_name_2, $data);

		// footer link name 3
		$id_footer_link_name_3 = SystemQModel::get_variable_by_name('footer_link_name_3')->id;
		$footer_link_name_3    = $request->input('footer_link_name_3');
		$data = ['value' => $footer_link_name_3];
		SystemCModel::update_variable($id_footer_link_name_3, $data);

		// footer link value 1
		$id_footer_link_value_1 = SystemQModel::get_variable_by_name('footer_link_value_1')->id;
		$footer_link_value_1    = $request->input('footer_link_value_1');
		$data = ['value' => $footer_link_value_1];
		SystemCModel::update_variable($id_footer_link_value_1, $data);

		// footer link value 2
		$id_footer_link_value_2 = SystemQModel::get_variable_by_name('footer_link_value_2')->id;
		$footer_link_value_2    = $request->input('footer_link_value_2');
		$data = ['value' => $footer_link_value_2];
		SystemCModel::update_variable($id_footer_link_value_2, $data);

		// footer link value 3
		$id_footer_link_value_3 = SystemQModel::get_variable_by_name('footer_link_value_3')->id;
		$footer_link_value_3    = $request->input('footer_link_value_3');
		$data = ['value' => $footer_link_value_3];
		SystemCModel::update_variable($id_footer_link_value_3, $data);

		// footer info 1
		$id_footer_info_1 = SystemQModel::get_variable_by_name('footer_info_1')->id;
		$footer_info_1    = $request->input('footer_info_1');
		$data = ['value' => $footer_info_1];
		SystemCModel::update_variable($id_footer_info_1, $data);

		// footer info 2
		$id_footer_info_2 = SystemQModel::get_variable_by_name('footer_info_2')->id;
		$footer_info_2    = $request->input('footer_info_2');
		$data = ['value' => $footer_info_2];
		SystemCModel::update_variable($id_footer_info_2, $data);

		// footer info 3
		$id_footer_info_3 = SystemQModel::get_variable_by_name('footer_info_3')->id;
		$footer_info_3    = $request->input('footer_info_3');
		$data = ['value' => $footer_info_3];
		SystemCModel::update_variable($id_footer_info_3, $data);

		// footer last_info
		$id_footer_last_info = SystemQModel::get_variable_by_name('footer_last_info')->id;
		$footer_last_info    = $request->input('footer_last_info');
		$data = ['value' => $footer_last_info];
		SystemCModel::update_variable($id_footer_last_info, $data);

		return redirect()->back()->with('success', 'Thay đổi giá trị hệ thống thành công');
	}
}