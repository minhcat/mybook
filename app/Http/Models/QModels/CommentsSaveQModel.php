<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class CommentsSaveQModel extends Model
{
	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_save_by_user_id($user_id) {
		$result = DB::table('comments_save as cs')
				->join('comments as c', 'c.id','=','cs.id_comment')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('id_user_mod', $user_id)
				->select('cs.*', 'c.content', 'c.page', 'c.id_page', 'c.datetime', 'u.name', 'u.image')
				->orderBy('id','desc')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_save_by_comment_id($comment_id) {
		$result = DB::table('comments_save')
				->where('id_comment', $comment_id)
				->get();

		return $result;
	}
}