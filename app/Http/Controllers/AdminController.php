<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\BModels\UsersBModel;
use App\Http\Models\QModels\UsersPunishQModel;
use App\Http\Models\QModels\UsersBanQModel;
use App\Http\Models\QModels\CommentsQModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\CharactersQModel;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function mod()
	{
		$user_id = 13;
		$user                  = UsersQModel::get_user_by_id($user_id);
		$new_comments          = CommentsBModel::get_new_comments_mod(5);
		$report_comments       = CommentsBModel::get_new_comments_report();
		$checkword_comments    = CommentsBModel::get_comments_checkword();
		$save_comments         = CommentsBModel::get_comments_save($user_id);
		$users_follow          = UsersBModel::get_user_follow($user_id);
		$users_punish          = UsersPunishQModel::get_user_punish_by_user_mod_id($user_id);
		$users_ban             = UsersBanQModel::get_user_ban_by_user_mod_id($user_id);
		$books_follow          = BooksBModel::get_books_follow_admin($user_id);
		$checkwords            = CommentsBModel::get_checkword_with_number_comments_have();
		$comments_books_follow = CommentsBModel::get_comments_in_books_follow($books_follow);
		// dd($comments_books_follow);
		
		$data['user']                  = $user;
		$data['new_comments']          = $new_comments;
		$data['report_comments']       = $report_comments;
		$data['checkword_comments']    = $checkword_comments;
		$data['save_comments']         = $save_comments;
		$data['users_follow']          = $users_follow;
		$data['users_punish']          = $users_punish;
		$data['users_ban']             = $users_ban;
		$data['books_follow']          = $books_follow;
		$data['checkwords']            = $checkwords;
		$data['comments_books_follow'] = $comments_books_follow;
		// dd($data);
		return view('pages.admin.mod', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function uploader()
	{
		$user_id = 14;
		// dd('h');
		$user 				= UsersQModel::get_user_by_id($user_id);
		$books_upload 		= BooksBModel::get_books_upload($user_id);
		$categories			= CategoriesQModel::get_categories_all();
		$characters			= CharactersQModel::get_characters_all();
		$authors			= AuthorsQModel::get_authors_all();
		$artists			= AuthorsQModel::get_artists_all();

		$data['user']				= $user;
		$data['books_upload']		= $books_upload;
		$data['categories']			= $categories;
		$data['characters']			= $characters;
		$data['authors']			= $authors;
		$data['artists']			= $artists;
		// dd($data);
		return view('pages.admin.uploader', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function statistic()
	{
		return view('pages.admin.statistic');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function admin()
	{
		return view('pages.admin.admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function super_admin()
	{
		return view('pages.admin.super-admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function create_book(Request $request)
	{
		$user_id = 14;
		$validate = [
			'image' 		=> 'required|image',
			'name'			=> 'required',
			'category'		=> 'required',
		];
		// dd($request->all());
		$this->validate($request, $validate);

		$new_book = new \stdClass;
		$new_book->image		= $request->input('image');
		$new_book->name			= $request->input('name');
		$new_book->other_name	= $request->input('other_name');
		$new_book->categories	= json_decode($request->input('category'));
		$new_book->characters	= json_decode($request->input('character'));
		$new_book->release_at	= $request->input('release_at');
		$new_book->description	= $request->input('description');
		$new_book->keyword		= $request->input('keyword');
		$new_book->status		= $request->input('status');
		$new_book->id_author	= $request->input('author');
		$new_book->id_artist	= $request->input('artist');
		$new_book->id_uploader	= $user_id;
		// dd($new_book);
		$upload = Images::upload_image($request);
		if ($upload == false)
			return redirect()->back()->with('danger','Lưu ảnh thất bại');

		BooksBModel::create_book($new_book);

		return redirect()->back()->with('success','Thêm truyện thành công');
	}
}
