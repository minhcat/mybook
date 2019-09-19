<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class AuthorsLikeQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_author_like_by_user_id($user_id) {
		$result = DB::table('authors_like')
				->where('id_user', $user_id)
				->first();

		return $result;
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_author_like_by_user_id_and_author_id($user_id, $author_id) {
		$result = DB::table('authors_like')
				->where('id_user', $user_id)
				->where('id_author', $author_id)
				->first();

		return $result;
	}
}