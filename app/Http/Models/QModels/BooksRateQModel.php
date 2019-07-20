<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksRateQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_rate_five_star_by_book_id($book_id) {
		$result = DB::table('books_rate as br')
				->join('books as b', 'b.id', '=', 'br.id_book')
				->where('b.deleted', 0)
				->where('br.id_book', $book_id)
				->where('br.rate', 5)
				->groupBy('br.rate')
				->selectRaw('br.id, COUNT(br.rate) as number, br.id_book')
				->get();

		if (empty($result)) return null;

		return $result[0];
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_rate_four_star_by_book_id($book_id) {
		$result = DB::table('books_rate as br')
				->join('books as b', 'b.id', '=', 'br.id_book')
				->where('b.deleted', 0)
				->where('br.id_book', $book_id)
				->where('br.rate', 4)
				->groupBy('br.rate')
				->selectRaw('br.id, COUNT(br.rate) as number, br.id_book')
				->get();

		if (empty($result)) return null;

		return $result[0];
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_rate_three_star_by_book_id($book_id) {
		$result = DB::table('books_rate as br')
				->join('books as b', 'b.id', '=', 'br.id_book')
				->where('b.deleted', 0)
				->where('br.id_book', $book_id)
				->where('br.rate', 3)
				->groupBy('br.rate')
				->selectRaw('br.id, COUNT(br.rate) as number, br.id_book')
				->get();

		if (empty($result)) return null;

		return $result[0];
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_rate_two_star_by_book_id($book_id) {
		$result = DB::table('books_rate as br')
				->join('books as b', 'b.id', '=', 'br.id_book')
				->where('b.deleted', 0)
				->where('br.id_book', $book_id)
				->where('br.rate', 2)
				->groupBy('br.rate')
				->selectRaw('br.id, COUNT(br.rate) as number, br.id_book')
				->get();

		if (empty($result)) return null;

		return $result[0];
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_rate_one_star_by_book_id($book_id) {
		$result = DB::table('books_rate as br')
				->join('books as b', 'b.id', '=', 'br.id_book')
				->where('b.deleted', 0)
				->where('br.id_book', $book_id)
				->where('br.rate', 1)
				->groupBy('br.rate')
				->selectRaw('br.id, COUNT(br.rate) as number, br.id_book')
				->get();

		if (empty($result)) return null;

		return $result[0];
	}
}