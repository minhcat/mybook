<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersQModel extends Model
{
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