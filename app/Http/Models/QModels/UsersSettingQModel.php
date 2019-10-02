<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersSettingQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_setting_by_user_id($user_id) {
		$result = DB::table('users_setting')
				->where('id_user', $user_id)
				->first();

		return $result;
	}
}