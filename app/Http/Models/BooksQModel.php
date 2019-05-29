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
	public static function get_books_sort_view() {
		$result = DB::table('books')
				->orderBy('view','desc')
				->get();

		return $result;
	}

	/**
	 * get books and sort by update
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_sort_update() {
		$result = DB::table('books')
				->orderBy('update_at','desc')
				->get();

		return $result;
	}

	/**
	 * get books and sort by comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_sort_comment() {
		$result = DB::table('books')
				->orderBy('comment','desc')
				->get();

		return $result;
	}

	/**
	 * get books and sort by rate
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_sort_rate() {
		$result = DB::table('books')
				->orderBy('rate','desc')
				->get();

		return $result;
	}
}