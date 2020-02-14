<?php 
namespace App\Http\Controllers;

use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksViewQModel;
use App\Http\Models\QModels\SystemQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\SystemBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\CategoriesBModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\CModels\CommentsCModel;
use App\Http\Models\CModels\UsersCModel;
use App\Http\Helpers\Helper;

class ConfigController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function set_password($user_id){
		$data = [
			'password' => bcrypt('123456'),
		];
		UsersCModel::update_user($user_id, $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function create_comment($user_id){
		$data = [
			'id_user'	=> $user_id,
			'type'		=> 'detail',
			'page'		=> 'book',
			'id_page'	=> '1',
			'level'		=> '0',
			'content'	=> 'Lorem ipsum dolor sit amet',
			'datetime'	=> date('Y-m-d H:i:s'),
		];
		return CommentsCModel::insert_comment($data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function add_extension_image_book($id_book){
		$book = BooksQModel::get_book_by_id($id_book);
		if ($book != null) {
			$data = [
				'image' => $book->image.'.jpg'
			];
			BooksCModel::update_book($id_book, $data);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function add_description_book($id_book){
		$book = BooksQModel::get_book_by_id($id_book);
		if($book != null) {
			if ($book->description == '') {
				$data = [
					'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque leo sed augue vehicula, et aliquam lectus consequat. Aliquam viverra condimentum est, ac mollis ligula ornare in. Nam vel euismod nunc, vel semper quam.'
				];
				BooksCModel::update_book($id_book, $data);
			}
		}
	}
}