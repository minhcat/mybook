<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersRateQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_rate_by_user_rate_id_and_user_id($user_rate_id, $user_id) {
		$result = DB::table('users_rate')
				->where('id_user', $user_id)
				->where('id_user_rate', $user_rate_id)
				->first();

		return $result;
	}
}