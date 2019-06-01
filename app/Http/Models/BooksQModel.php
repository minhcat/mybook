<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksQModel extends Model
{
	/**
	 * get all books
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_all_books() {
		$result = DB::table('books')
				->get();

		return $result;
	}

	/**
	 * get books and sort by view
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_home_view($number) {
		$result = DB::table('books')
				->orderBy('view','desc')
				->take($number)
				->get();

		return $result;
	}

	/**
	 * get books and sort by update
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_home_update($number) {
		$result = DB::table('books')
				->orderBy('update_at','desc')
				->take($number)
				->get();

		return $result;
	}

	/**
	 * get books and sort by comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_home_comment($number) {
		$result = DB::table('books')
				->orderBy('comment','desc')
				->take($number)
				->get();

		return $result;
	}

	/**
	 * get books and sort by rate
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_home_rate($number) {
		$result = DB::table('books')
				->orderBy('rate','desc')
				->take($number)
				->get();

		return $result;
	}

	/**
	 * get books and sort by view
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_list_view($number) {
		$result = DB::table('books')
				->orderBy('view','desc')
				->paginate($number);

		return $result;
	}

	/**
	 * get books and sort by update
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_list_update($number) {
		$result = DB::table('books')
				->orderBy('update_at','desc')
				->paginate($number);

		return $result;
	}

	/**
	 * get books and sort by update
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_list_comment($number) {
		$result = DB::table('books')
				->orderBy('comment','desc')
				->paginate($number);

		return $result;
	}

	/**
	 * get books and sort by rate
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_list_rate($number) {
		$result = DB::table('books')
				->orderBy('rate','desc')
				->paginate($number);

		return $result;
	}

	/**
	 * get books by year
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_list_year($year, $number) {
		$result = DB::table('books')
				->whereYear('release_at', '=', $year)
				->paginate($number);

		return $result;
	}

	/**
	 * get books by year
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_list_status($status, $number) {
		$result = DB::table('books')
				->where('status', '=', $status)
				->paginate($number);

		return $result;
	}

	/**
	 * get books by category
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_list_category($category, $number) {
		$result = DB::table('books as b')
				->join('book_category as bc', 'bc.id_book', '=', 'b.id')
				->join('categories as c', 'bc.id_category', '=', 'c.id')
				->select('b.*', 'c.name as category_name')
				->where('c.name', '=', $category)
				->paginate($number);

		return $result;
	}
}