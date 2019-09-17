<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksLikeQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_like_by_user_id($user_id) {
		$result = DB::table('books_like')
				->where('id_user', $user_id)
				->first();

		return $result;
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_like_by_user_id_and_book_id($user_id, $book_id) {
		$result = DB::table('books_like')
				->where('id_user', $user_id)
				->where('id_book', $book_id)
				->first();

		return $result;
	}
}