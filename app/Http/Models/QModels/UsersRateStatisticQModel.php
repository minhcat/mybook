<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersRateStatisticQModel extends Model
{
	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_rate_by_user_id_and_date_and_rate($user_id, $date, $month, $year, $rate) {
		$result = DB::table('users_rate_statistic')
				->where('id_user', $user_id)
				->where('date', $date)
				->where('month', $month)
				->where('year', $year)
				->where('rate', $rate)
				->first();

		return $result;
	}
}