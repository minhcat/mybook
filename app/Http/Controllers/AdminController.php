<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksApprovedQModel;
use App\Http\Models\QModels\BooksErrorQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersPunishQModel;
use App\Http\Models\QModels\UsersBanQModel;
use App\Http\Models\QModels\CommentsQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\ChapsApprovedQModel;
use App\Http\Models\QModels\ChapsErrorQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\CModels\AuthorsCModel;
use App\Http\Models\CModels\ChapsCModel;
use App\Http\Models\CModels\CharactersCModel;
use App\Http\Models\CModels\BooksApprovedCModel;
use App\Http\Models\CModels\ChapsApprovedCModel;
use App\Http\Models\CModels\TransCModel;
use App\Http\Models\BModels\AuthorsBModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\ChapsBModel;
use App\Http\Models\BModels\CharactersBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\TransBModel;
use App\Http\Models\BModels\ImagesBModel;
use App\Http\Models\BModels\UsersBModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Factory;

use Illuminate\Http\Request;

class AdminController extends Controller {

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
		// dd($data);
		return view('pages.admin.mod', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function uploader() {
		$user_id = 14;
		$data['user'] 				= UsersQModel::get_user_by_id($user_id);
		$data['chaps']				= ChapsQModel::get_chaps_all();
		$data['books_upload'] 		= BooksBModel::get_books_upload($user_id);
		$data['categories']			= CategoriesQModel::get_categories_all();
		$data['characters']			= CharactersBModel::get_characters_all();
		$data['authors']			= AuthorsQModel::get_authors_all();
		$data['artists']			= AuthorsQModel::get_artists_all();
		$data['transes']			= TransBModel::get_transes_all();
		$data['books_approved']		= BooksBModel::get_books_not_approved($user_id);
		$data['chaps_approved']		= ChapsQModel::get_chaps_not_approved($user_id);
		$data['books_error']		= BooksErrorQModel::get_books_error_by_uploader_id($user_id);
		$data['chaps_error']		= ChapsErrorQModel::get_chaps_error_by_uploader_id($user_id);
		$data['authors_detail']		= AuthorsBModel::get_authors_all();
		$data['comments']			= CommentsBModel::get_new_comments_uploader($data['books_upload']);
		$data['first_book']			= $data['books_upload'][0];

		// dd($data);
		return view('pages.admin.uploader', $data);
	}
}
