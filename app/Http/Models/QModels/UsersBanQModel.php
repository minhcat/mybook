<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersBanQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_ban_by_user_mod_id($user_mod_id) {
		$result = DB::table('users_ban as ub')
				->join('users as u', 'u.id', '=', 'ub.id_user_ban')
				->join('comments as c', 'c.id', '=', 'ub.id_comment')
				->where('id_user_mod', $user_mod_id)
				->select('ub.*', 'u.name', 'c.content')
				->get();

		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_ban_by_user_id($user_id) {
		$result = DB::table('users_ban')
				->where('id_user_ban', $user_id)
				->get();

		return $result;
	}
}