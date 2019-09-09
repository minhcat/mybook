<?php 
namespace App\Http\Controllers;

use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksViewQModel;
use App\Http\Models\QModels\SystemQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\SystemBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\CategoriesBModel;
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
}