<?php

namespace App\Http\Models\CModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class AuthorsCategoryCModel extends Model
{
	/**
	 * insert food
	 * @param array $data
	 * @return last inserted id
	 */
	public static function insert_author_category($data) {
		return DB::table('authors_category')->insertGetId($data);
	}

	/**
	 * delete a food
	 * @param $id int
	 * @return boolean
	 */
	public static function delete_author_category($id) {
		return DB::table('authors_category')
			->where('id', '=', $id)
			->delete();
	}

	/**
	 * update food
	 * @param id
	 * @param array data
	 * @return boolean
	 */
	public static function delete_author_category_by_author_id($id_author) {
		return DB::table('authors_category')
				->where('id_author', '=', $id_book)
				->delete();
	}
}