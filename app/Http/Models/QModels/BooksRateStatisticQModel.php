<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksRateStatisticQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_rate_all($date, $month, $year) {
		$result = DB::table('books_rate_statistic')
				->where('year', $year)
				->where('month', $month)
				->where('date', $date)
				->get();

		if (empty($result)) return null;

		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_rate_day_all($day, $week, $month, $year, $point) {
		$result = DB::table('books_rate_statistic')
				->where('year', $year)
				->where('month', $month)
				->where('week', $week)
				->where('day', $day)
				->where('point', $point)
				->groupBy('day')
				->selectRaw('SUM(rate) as rate')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_rate_week_all($week, $month, $year, $point) {
		$result = DB::table('books_rate_statistic')
				->where('year', $year)
				->where('month', $month)
				->where('week', $week)
				->where('point', $point)
				->groupBy('week')
				->selectRaw('SUM(rate) as rate')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_rate_month_all($month, $year, $point) {
		$result = DB::table('books_rate_statistic')
				->where('year', $year)
				->where('month', $month)
				->where('point', $point)
				->groupBy('month')
				->selectRaw('SUM(rate) as rate')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_rate_season_all($season, $year, $point) {
		$result = DB::table('books_rate_statistic')
				->where('year', $year)
				->where('season', $season)
				->where('point', $point)
				->groupBy('season')
				->selectRaw('SUM(rate) as rate')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_rate_year_all($year, $point) {
		$result = DB::table('books_rate_statistic')
				->where('year', $year)
				->where('point', $point)
				->groupBy('year')
				->selectRaw('SUM(rate) as rate')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}
}