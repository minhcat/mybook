<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class NotificationsQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_notifications_by_user_id($user_id) {
		$result = DB::table('notifications')
				->where('id_user', $user_id)
				->orderBy('date', 'desc')
				->paginate(12);

		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_notifications_not_seen($user_id) {
		$result = DB::table('notifications')
				->where('id_user', $user_id)
				->where('seen', 1)
				->paginate(12);

		return $result;
	}
}