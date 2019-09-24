<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class FriendsAddQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_friend_add_by_user_add_id($user_add_id) {
		$result = DB::table('friends_add')
				->where('id_user_add', $user_add_id)
				->first();

		return $result;
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_friend_add_by_user_add_id_and_user_id($user_add_id, $user_id) {
		$result = DB::table('friends_add')
				->where('id_user_add', $user_add_id)
				->where('id_user', $user_id)
				->first();

		return $result;
	}
}