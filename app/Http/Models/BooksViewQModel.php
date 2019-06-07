<?php

namespace App\Http\Models;

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
	public static function get_books_view_current_date() {
		$date = date('d');

		$result = DB::table('books_view as bv')
				->join('books as b', 'b.id', '=', 'bv.id_book')
				->where('date', $date)
				->select('b.name as name', 'bv.view as view')
				->orderBy('view', 'desc')
				->take(6)
				->get();

		return $result;
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_view_current_week() {
		$day =  (int)date('w') + 1;
		$date = (int)date('d');
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
				->select('b.name as name', DB::raw('sum(bv.view) as view'))
				->groupBy('id_book')
				->orderBy('view', 'desc')
				->take(6)
				->get();

		return $result;
	}

	/**
	 * get book view current week
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_view_current_month() {
		$month = date('m');

		$result = DB::table('books_view as bv')
				->join('books as b', 'b.id', '=', 'bv.id_book')
				->where('month', $month)
				->select('b.name as name', DB::raw('sum(bv.view) as view'))
				->groupBy('id_book')
				->orderBy('view', 'desc')
				->take(6)
				->get();

		return $result;
	}
}