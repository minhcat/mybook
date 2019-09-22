<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class TransFollowStatisticQModel extends Model
{
	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_trans_follow_by_trans_id_and_date($trans_id, $date, $month, $year) {
		$result = DB::table('trans_follow_statistic')
				->where('id_trans', $trans_id)
				->where('date', $date)
				->where('month', $month)
				->where('year', $year)
				->first();

		return $result;
	}
}