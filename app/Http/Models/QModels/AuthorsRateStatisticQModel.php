<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class AuthorsRateStatisticQModel extends Model
{
	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_author_rate_by_author_id_and_date_and_rate($author_id, $date, $month, $year, $rate) {
		$result = DB::table('authors_rate_statistic')
				->where('id_author', $author_id)
				->where('date', $date)
				->where('month', $month)
				->where('year', $year)
				->where('rate', $rate)
				->first();

		return $result;
	}
}