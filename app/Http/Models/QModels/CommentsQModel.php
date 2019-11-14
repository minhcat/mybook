<?php

namespace App\Http\Models\QModels;

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
	public static function get_comment_by_id($id) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('c.id', $id)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result[0];
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_all() {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->orderBy('c.id','desc')
				->get();

		return $result;
	}

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

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_by_character_id($id_character) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'detail')
				->where('page', 'character')
				->where('level', 0)
				->where('id_page', $id_character)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_character_reply_by_user_id($id_user, $id_character) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'detail')
				->where('page', 'character')
				->where('level', 1)
				->where('id_page', $id_character)
				->where('id_reply', $id_user)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_by_user_id($id_user) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'detail')
				->where('page', 'user')
				->where('level', 0)
				->where('id_page', $id_user)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_user_reply_by_user_id($id_user_detail, $id_user_comment) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'detail')
				->where('page', 'user')
				->where('level', 1)
				->where('id_page', $id_user_detail)
				->where('id_reply', $id_user_comment)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_by_author_id($id_author) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'detail')
				->where('page', 'author')
				->where('level', 0)
				->where('id_page', $id_author)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_author_reply_by_user_id($id_user, $id_author) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'detail')
				->where('page', 'author')
				->where('level', 1)
				->where('id_page', $id_author)
				->where('id_reply', $id_user)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_by_trans_id($id_trans) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'detail')
				->where('page', 'trans')
				->where('level', 0)
				->where('id_page', $id_trans)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_trans_reply_by_user_id($id_user, $id_trans) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'detail')
				->where('page', 'trans')
				->where('level', 1)
				->where('id_page', $id_trans)
				->where('id_reply', $id_user)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_by_chap_id($id_chap) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'read')
				->where('level', 0)
				->where('id_page', $id_chap)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_chap_reply_by_user_id($id_user, $id_chap) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('type', 'read')
				->where('level', 1)
				->where('id_page', $id_chap)
				->where('id_reply', $id_user)
				->select('c.*', 'u.image', 'u.name', 'u.nickname')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_new($number) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->orderBy('datetime','desc')
				->select('c.*', 'u.image', 'u.name', 'u.nickname', 'u.name_login as slug')
				->take($number)
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comment_new_first($id_comment_old) {
		$result = DB::table('comments as c')
				->join('users as u', 'u.id', '=', 'c.id_user')
				->where('c.id', '>', $id_comment_old)
				->orderBy('datetime','desc')
				->select('c.*', 'u.image', 'u.name', 'u.nickname', 'u.name_login as slug')
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_number_comments_by_user_id($id_user) {
		$result = DB::table('comments')
				->where('id_user', $id_user)
				->groupBy('id_user')
				->selectRaw('id_user, COUNT(content) as number')
				->get();

		return $result[0]->number;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_new_by_user_id($id_user) {
		$result = DB::table('comments')
				->where('id_user', $id_user)
				->orderBy('datetime','desc')
				->take(1)
				->get();

		return $result[0]->content;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function search_comments_by_keyword($keyword) {
		$result = DB::table('comments')
				->where('content', 'LIKE', '%'.$keyword.'%')
				->get();

		return $result;
	}
}