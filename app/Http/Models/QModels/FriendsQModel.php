<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class FriendsQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_friends_by_user_id($user_id) {
		$result = DB::table('friends as f')
				->join('users as u', 'f.id_user_2','=','u.id')
				->where('id_user_1', $user_id)
				->select('u.*')
				->paginate(12);

		return $result;
	}
}