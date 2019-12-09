<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class AuthorsFollowQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_author_follow_by_user_id($user_id) {
		$result = DB::table('authors_follow')
				->where('id_user', $user_id)
				->first();

		return $result;
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_authors_follow_by_book_id($book_id) {
		$result = DB::table('authors_follow as af')
				->join('book as b', 'b.id_author', '=', 'af.id')
				->where('b.id', $book_id)
				->select('af.*')
				->get();

		return $result;
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_author_follow_by_user_id_and_author_id($user_id, $author_id) {
		$result = DB::table('authors_follow')
				->where('id_user', $user_id)
				->where('id_author', $author_id)
				->first();

		return $result;
	}
}