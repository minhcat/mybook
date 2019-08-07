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
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\CModels\UsersCModel;
use App\Http\Models\CModels\ChapsCModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\TransBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\UsersBModel;
use App\Http\Models\BModels\AuthorsBModel;
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
}