<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class CommentsQModel extends Model
{
	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_by_book_id($id_book) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'detail')
				->where('page', 'book')
				->where('level', 0)
				->where('id_page', $id_book)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_book_reply_by_user_id($id_user, $id_book) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'detail')
				->where('page', 'book')
				->where('level', 1)
				->where('id_page', $id_book)
				->where('id_reply', $id_user)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}
}