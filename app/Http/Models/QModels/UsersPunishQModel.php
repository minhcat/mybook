<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersPunishQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_punish_by_user_mod_id($user_mod_id) {
		$result = DB::table('users_punish as up')
				->join('users as u', 'u.id', '=', 'up.id_user_punish')
				->join('comments as c', 'c.id', '=', 'up.id_comment')
				->where('id_user_mod', $user_mod_id)
				->select('up.*', 'u.name', 'c.content')
				->get();

		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_punish_by_user_id($user_id) {
		$result = DB::table('users_punish')
				->where('id_user_punish', $user_id)
				->get();

		return $result;
	}
}