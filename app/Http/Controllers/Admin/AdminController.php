<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\BooksErrorQModel;
use App\Http\Models\BModels\TransBModel;
use App\Http\Models\BModels\CharactersBModel;
use App\Http\Models\BModels\AuthorsBModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Factory;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function admin() {
		$user_id = 14;
		$data['user']			= UsersQModel::get_user_by_id($user_id);
		$data['transes']		= TransBModel::get_transes_all();
		$data['characters']		= CharactersBModel::get_characters_all();
		$data['categories']		= CategoriesQModel::get_categories_all();
		$data['books_error']	= BooksErrorQModel::get_books_error_by_uploader_id($user_id);
		$data['authors_detail']	= AuthorsBModel::get_authors_all();
		return view('pages.admin.admin', $data);
	}
}