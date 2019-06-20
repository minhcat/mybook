<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersFollowQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_follow_by_user_mod_id($user_mod_id) {
		$result = DB::table('users_follow as uf')
				->join('users as u', 'u.id', '=', 'uf.id_user_follow')
				->where('id_user_mod', $user_mod_id)
				->select('uf.*', 'u.name')
				->take(6)
				->get();

		return $result;
	}
}