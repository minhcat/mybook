<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksFollowQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_follow_by_user_id($user_id) {
		$result = DB::table('books_follow as bf')
				->join('books as b', 'b.id', '=', 'bf.id_book')
				->where('id_user', $user_id)
				->paginate();

		return $result;
	}
}