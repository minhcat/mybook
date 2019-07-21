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

class SuperAdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function super_admin() {
		$user_id = 14;
		$data['user']			= UsersQModel::get_user_by_id($user_id);
		$data['books_upload']	= BooksBModel::get_books_upload($user_id);
		$data['categories']		= CategoriesQModel::get_categories_all();
		$data['characters']		= CharactersQModel::get_characters_all();
		$data['transes']		= TransBModel::get_transes_all();
		$data['authors']		= AuthorsQModel::get_authors_all();
		$data['artists']		= AuthorsQModel::get_artists_all();
		$data['authors_detail']	= AuthorsBModel::get_authors_all();

		return view('pages.admin.super-admin', $data);
	}
}