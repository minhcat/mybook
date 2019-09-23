<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersLikeQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_users_like_by_user_id($user_id) {
		$result = DB::table('users_like')
				->where('id_user', $user_id)
				->first();

		return $result;
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_like_by_user_id_and_user_like_id($user_id, $user_like_id) {
		$result = DB::table('users_like')
				->where('id_user', $user_id)
				->where('id_user_like', $user_like_id)
				->first();

		return $result;
	}
}