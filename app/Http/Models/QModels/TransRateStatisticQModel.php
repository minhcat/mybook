<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class TransRateStatisticQModel extends Model
{
	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_trans_rate_by_trans_id_and_date_and_rate($trans_id, $date, $month, $year, $rate) {
		$result = DB::table('trans_rate_statistic')
				->where('id_trans', $trans_id)
				->where('date', $date)
				->where('month', $month)
				->where('year', $year)
				->where('rate', $rate)
				->first();

		return $result;
	}
}