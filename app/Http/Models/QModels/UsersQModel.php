<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_by_id($id) {
		$result = DB::table('users')
				->where('id', $id)
				->get();

		if (empty($result))
			return null;

		return $result[0];
	}

	/**
	 * get user by name_login(slug)
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_by_name_login($name_login) {
		$result = DB::table('users')
				->where('name_login', $name_login)
				->get();

		return $result[0];
	}
}