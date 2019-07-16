<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\CModels\TransCModel;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class TransBModel extends Model
{
	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_transes_all() {
		$transes = TransQModel::get_trans_all();
		foreach ($transes as $trans) {
			$books = TransQModel::get_books_by_trans_id($trans->id);
			$trans->books = count($books);
		}
		return $transes;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function create_trans($new_trans) {
		// insert trans
		$trans = [
			'name'			=> $new_trans->name,
			'image'			=> ($new_trans->is_image) ? str_slug($new_trans->name, '-') : '',
			'slug'			=> str_slug($new_trans->name, '_'),
			'leader'		=> $new_trans->leader,
			'member'		=> $new_trans->member,
			'facebook'		=> $new_trans->facebook,
			'website'		=> $new_trans->website,
			'description'	=> $new_trans->description
		];

		$id_trans = TransCModel::insert_trans($trans);
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function update_trans($update_trans) {
		$id = $update_trans->id;
		// update trans
		$trans = [
			'name'			=> $update_trans->name,
			'slug'			=> str_slug($update_trans->name, '_'),
			'leader'		=> $update_trans->leader,
			'member'		=> $update_trans->member,
			'facebook'		=> $update_trans->facebook,
			'website'		=> $update_trans->website,
			'description'	=> $update_trans->description
		];
		if ($update_trans->is_image) {
			$trans['image'] = str_slug($update_trans->name);
		}
		TransCModel::update_trans($id, $trans);
	}
}
