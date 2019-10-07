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
				->first();

		return $result;
	}

	/**
	 * get user by name_login(slug)
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_by_name_login($name_login) {
		$result = DB::table('users')
				->where('name_login', $name_login)
				->first();

		return $result;
	}

	/**
	 * get user by name_login(slug)
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_by_name($name) {
		$result = DB::table('users')
				->where('name', $name)
				->first();

		return $result;
	}

	/**
	 * get user by name_login(slug)
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_admins() {
		$result = DB::table('users')
				->whereNotNull('admin')
				->get();

		return $result;
	}

	/**
	 * get user by name_login(slug)
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_users_all() {
		$result = DB::table('users')
				->get();

		return $result;
	}

	/**
	 * get user by name_login(slug)
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function check_admin($user_id) {
		$result = DB::table('users')
				->where('id', $user_id)
				->whereNotNull('admin')
				->get();

		return (!empty($result)) ? true : false;
	}
}