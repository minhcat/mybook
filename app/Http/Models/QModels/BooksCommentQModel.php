<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksCommentQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_comment_all($date, $month, $year) {
		$result = DB::table('books_comment')
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
	public static function get_book_comment_day_all($day, $week, $month, $year) {
		$result = DB::table('books_comment')
				->where('year', $year)
				->where('month', $month)
				->where('week', $week)
				->where('day', $day)
				->groupBy('day')
				->selectRaw('SUM(comment) as comment')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_comment_week_all($week, $month, $year) {
		$result = DB::table('books_comment')
				->where('year', $year)
				->where('month', $month)
				->where('week', $week)
				->groupBy('week')
				->selectRaw('SUM(comment) as comment')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_comment_month_all($month, $year) {
		$result = DB::table('books_comment')
				->where('year', $year)
				->where('month', $month)
				->groupBy('month')
				->selectRaw('SUM(comment) as comment')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_comment_season_all($season, $year) {
		$result = DB::table('books_comment')
				->where('year', $year)
				->where('season', $season)
				->groupBy('season')
				->selectRaw('SUM(comment) as comment')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_comment_year_all($year) {
		$result = DB::table('books_comment')
				->where('year', $year)
				->groupBy('year')
				->selectRaw('SUM(comment) as comment')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}
}