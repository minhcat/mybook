<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersLikeStatisticQModel extends Model
{
	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_like_by_user_id_and_date($user_id, $date, $month, $year) {
		$result = DB::table('users_like_statistic')
				->where('id_user', $user_id)
				->where('date', $date)
				->where('month', $month)
				->where('year', $year)
				->first();

		return $result;
	}
}