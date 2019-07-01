<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_by_id($id) {
		$result = DB::table('books')
				->where('id', $id)
				->where('deleted', 0)
				->get();

		return $result[0];
	}

	/**
	 * get all books
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_all_books() {
		$result = DB::table('books')
				->where('deleted', 0)
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
				->where('deleted', 0)
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
				->where('deleted', 0)
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
				->where('deleted', 0)
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
				->where('deleted', 0)
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
				->where('deleted', 0)
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
				->where('deleted', 0)
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
				->where('deleted', 0)
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
				->where('deleted', 0)
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
				->where('deleted', 0)
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
				->where('deleted', 0)
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
				->join('books_category as bc', 'bc.id_book', '=', 'b.id')
				->join('categories as c', 'bc.id_category', '=', 'c.id')
				->where('c.name', '=', $category)
				->where('b.deleted', 0)
				->paginate($number);

		return $result;
	}

	/**
	 * get book by slug
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_by_slug($slug) {
		$result = DB::table('books')
				->where('slug', $slug)
				->where('deleted', 0)
				->get();

		return $result[0];
	}

	/**
	 * get books by author id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_by_author_id($author_id) {
		$result = DB::table('books')
				->where('id_author', $author_id)
				->where('deleted', 0)
				->get();

		return $result;
	}

	/**
	 * get books random
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_random($number) {
		$result = DB::table('books')
				->orderByRaw('RAND()')
				->where('deleted', 0)
				->take($number)
				->get();

		return $result;
	}

	/**
	 * search books by name 
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function search_books_by_name($name) {
		$result = DB::table('books')
				->where('deleted', 0)
				->where('keyword', 'like' ,'%'.$name.'%')
				->get();

		return $result;
	}

	/**
	 * search books by name 
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_by_uploader_id($uploader_id) {
		$result = DB::table('books')
				->where('deleted', 0)
				->where('id_uploader', $uploader_id)
				->get();

		return $result;
	}
}