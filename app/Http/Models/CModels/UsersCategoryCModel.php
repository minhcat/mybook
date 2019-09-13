<?php

namespace App\Http\Models\CModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersCategoryCModel extends Model
{
	/**
	 * insert food
	 * @param array $data
	 * @return last inserted id
	 */
	public static function insert_user_category($data) {
		return DB::table('users_category')->insertGetId($data);
	}

	/**
	 * delete a food
	 * @param $id int
	 * @return boolean
	 */
	public static function delete_user_category($id) {
		return DB::table('users_category')
			->where('id', '=', $id)
			->delete();
	}

	/**
	 * update food
	 * @param id
	 * @param array data
	 * @return boolean
	 */
	public static function update_user_category($id, $data) {
		return DB::table('users_category')
				->where('id', '=', $id)
				->update($data);
	}
}