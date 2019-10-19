<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class NotificationsGroupQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_group_by_id($id) {
		$result = DB::table('notifications_group')
				->where('id', $id)
				->first();

		return $result;
	}
}