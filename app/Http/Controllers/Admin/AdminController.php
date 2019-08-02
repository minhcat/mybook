<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksApprovedQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\CommentsReportQModel;
use App\Http\Models\QModels\BooksErrorQModel;
use App\Http\Models\BModels\TransBModel;
use App\Http\Models\BModels\CharactersBModel;
use App\Http\Models\BModels\AuthorsBModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\CModels\BooksApprovedCModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Factory;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function admin() {
		$user_id = 16;
		$data['user']			= UsersQModel::get_user_by_id($user_id);
		$data['transes']		= TransBModel::get_transes_all();
		$data['characters']		= CharactersBModel::get_characters_all();
		$data['categories']		= CategoriesQModel::get_categories_all();
		$data['books_error']	= BooksErrorQModel::get_books_error_by_uploader_id($user_id);
		$data['authors_detail']	= AuthorsBModel::get_authors_all();
		$data['books_approve']	= BooksQModel::get_books_not_approved_all();
		$data['users_approve']	= CommentsReportQModel::get_comments_report_with_punish();
		// dd($data);
		return view('pages.admin.admin', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function approve_book($book_id) {
		$data = [
			'approved' => 1
		];
		BooksCModel::update_book($book_id, $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function reply_book($book_id, $content) {
		$book_id = (int)$book_id;
		$book_approved	= BooksApprovedQModel::get_book_approved_by_book_id($book_id);
		$book			= BooksQModel::get_book_by_id_not_approved($book_id);
		if ($book_approved == null) {
			$data = [
				'id_book'  => $book_id,
				'id_admin' => $book->id_uploader,
				'reply'    => $content,
				'status'   => 'reply',
				'call'     => 0,
				'date'     => $book->create_at,
			];
			BooksApprovedCModel::insert_book_approved($data);
		} else {
			$data = [
				'reply' => $content,
			];
			BooksApprovedCModel::update_book_approved($book_approved->id, $data);
		}
	}
}