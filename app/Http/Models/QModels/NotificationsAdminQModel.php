<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class NotificationsAdminQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_notifications_not_seen_by_user_id($user_id) {
		$result = DB::table('notifications_admin')
				->where('id_user', $user_id)
				->where('seen', 0)
				->get();

		return $result;
	}

	/**
	 * get author by slug
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_notifications_by_admin_id($admin_id) {
		$result = DB::table('notifications_admin as n')
				->join('users as u', 'u.id', '=', 'n.id_user')
				->where('id_admin', $admin_id)
				->select('n.*', 'u.name')
				->get();

		return $result;
	}

	/**
	 * get author by slug
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_notifications_by_user_id($user_id) {
		$result = DB::table('notifications_admin as n')
				->join('users as u', 'u.id', '=', 'n.id_admin')
				->where('id_user', $user_id)
				->select('n.*', 'u.name')
				->get();

		return $result;
	}
}