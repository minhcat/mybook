<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class AuthorsFollowStatisticQModel extends Model
{
	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_author_follow_by_author_id_and_date($author_id, $date, $month, $year) {
		$result = DB::table('authors_follow_statistic')
				->where('id_author', $author_id)
				->where('date', $date)
				->where('month', $month)
				->where('year', $year)
				->first();

		return $result;
	}
}