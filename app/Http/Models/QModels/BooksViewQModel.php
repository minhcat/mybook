<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksViewQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_view_current_date($number) {
		$date = date('d', strtotime('2019-06-07'));

		$result = DB::table('books_view as bv')
				->join('books as b', 'b.id', '=', 'bv.id_book')
				->where('date', $date)
				->where('b.deleted', 0)
				->where('approved', 1)
				->select('b.id', 'b.name as name', 'b.slug', 'bv.view as view')
				->orderBy('view', 'desc')
				->take($number)
				->get();

		return $result;
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_view_current_week($number) {
		$day =  (int)date('w', strtotime('2019-06-07')) + 1;
		$date = (int)date('d', strtotime('2019-06-07'));
		$week = 0;
		for ($i = 1; $i <= 6; $i++) {
			$week = $i;
			if ($date > $day)
				$date = $date - 7;
			else
				break;
		}

		$result = DB::table('books_view as bv')
				->join('books as b', 'b.id', '=', 'bv.id_book')
				->where('week', $week)
				->where('b.deleted', 0)
				->where('approved', 1)
				->select('b.id', 'b.name as name', 'b.slug', DB::raw('sum(bv.view) as view'))
				->groupBy('id_book')
				->orderBy('view', 'desc')
				->take($number)
				->get();

		return $result;
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_view_current_month($number) {
		$month = date('m', strtotime('2019-06-07'));

		$result = DB::table('books_view as bv')
				->join('books as b', 'b.id', '=', 'bv.id_book')
				->where('month', $month)
				->where('b.deleted', 0)
				->where('approved', 1)
				->select('b.id', 'b.name as name', 'b.slug', DB::raw('sum(bv.view) as view'))
				->groupBy('id_book')
				->orderBy('view', 'desc')
				->take($number)
				->get();

		return $result;
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_view_all($date, $month, $year) {
		$result = DB::table('books_view')
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
	public static function get_book_view_all_by_book_id($book_id) {
		$result = DB::table('books_view')
				->where('id_book', $book_id)
				->groupBy('id_book')
				->selectRaw('SUM(view) as view')
				->get();

		if (empty($result)) return null;

		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_view_day_all($day, $week, $month, $year) {
		$result = DB::table('books_view')
				->where('year', $year)
				->where('month', $month)
				->where('week', $week)
				->where('day', $day)
				->groupBy('day')
				->selectRaw('SUM(view) as view')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_view_day_by_book_id($book_id, $day, $week, $month, $year) {
		$result = DB::table('books_view')
				->where('id_book', $book_id)
				->where('year', $year)
				->where('month', $month)
				->where('week', $week)
				->where('day', $day)
				->groupBy('day')
				->selectRaw('SUM(view) as view')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_view_week_all($week, $month, $year) {
		$result = DB::table('books_view')
				->where('year', $year)
				->where('month', $month)
				->where('week', $week)
				->groupBy('week')
				->selectRaw('SUM(view) as view')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_view_week_by_book_id($book_id, $week, $month, $year) {
		$result = DB::table('books_view')
				->where('id_book', $book_id)
				->where('year', $year)
				->where('month', $month)
				->where('week', $week)
				->groupBy('week')
				->selectRaw('SUM(view) as view')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_view_month_all($month, $year) {
		$result = DB::table('books_view')
				->where('year', $year)
				->where('month', $month)
				->groupBy('month')
				->selectRaw('SUM(view) as view')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_view_month_by_book_id($book_id, $month, $year) {
		$result = DB::table('books_view')
				->where('id_book', $book_id)
				->where('year', $year)
				->where('month', $month)
				->groupBy('month')
				->selectRaw('SUM(view) as view')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_view_season_all($season, $year) {
		$result = DB::table('books_view')
				->where('year', $year)
				->where('season', $season)
				->groupBy('season')
				->selectRaw('SUM(view) as view')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_view_year_all($year) {
		$result = DB::table('books_view')
				->where('year', $year)
				->groupBy('year')
				->selectRaw('SUM(view) as view')
				->get();

		if (empty($result)) return null;
		
		return $result[0];
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_view_by_book_id($book_id) {
		$result = DB::table('books_view')
				->where('id_book', $book_id)
				->first();
		
		return $result;
	}
}