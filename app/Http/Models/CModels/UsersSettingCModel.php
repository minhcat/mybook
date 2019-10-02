<?php

namespace App\Http\Models\CModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersSettingCModel extends Model
{
	/**
	 * insert food
	 * @param array $data
	 * @return last inserted id
	 */
	public static function insert_user_setting($data) {
		return DB::table('users_setting')->insertGetId($data);
	}

	/**
	 * delete a food
	 * @param $id int
	 * @return boolean
	 */
	public static function delete_user_setting($id) {
		return DB::table('users_setting')
			->where('id', '=', $id)
			->delete();
	}

	/**
	 * update food
	 * @param id
	 * @param array data
	 * @return boolean
	 */
	public static function update_user_setting($id, $data) {
		return DB::table('users_setting')
				->where('id', '=', $id)
				->update($data);
	}
}