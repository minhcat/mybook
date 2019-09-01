<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class ChapsQModel extends Model
{
	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_chap_by_id($id) {
		$result = DB::table('chaps as c')
				->join('books as b', 'b.id', '=', 'c.id_book')
				->join('trans as t', 't.id', '=', 'c.id_trans')
				->where('b.deleted', 0)
				->where('c.id',$id)
				->select('c.*', 'b.name as book_name', 'b.image', 'b.view', 'b.like','b.follow','b.description', 'b.slug as book_slug', 't.slug as trans_slug')
				->get();

		return $result[0];
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_chaps_all() {
		$result = DB::table('chaps as c')
				->join('books as b', 'b.id', '=', 'c.id_book')
				->where('b.deleted', 0)
				->select('c.*')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_chaps_by_book_id_trans_id($book_id, $trans_id) {
		$result = DB::table('chaps as c')
				->join('books as b', 'b.id', '=', 'c.id_book')
				->where('b.deleted', 0)
				->where('c.id_book',$book_id)
				->where('c.id_trans',$trans_id)
				->orderBy('c.index','desc')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_chap_by_book_id_trans_id_chap_slug($book_id, $trans_id, $chap_slug) {
		$result = DB::table('chaps as c')
				->join('books as b', 'b.id', '=', 'c.id_book')
				->where('b.deleted', 0)
				->where('c.id_book',$book_id)
				->where('c.id_trans',$trans_id)
				->where('c.slug',$chap_slug)
				->orderBy('c.index','desc')
				->select('c.*')
				->get();
				
		return $result[0];
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_trans_id_by_book_id($book_id) {
		$result = DB::table('chaps as c')
				->join('books as b', 'b.id', '=', 'c.id_book')
				->where('b.deleted', 0)
				->where('c.id_book',$book_id)
				->groupBy('c.id_trans')
				->select('c.id_trans')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function sum_chap_by_book_id($book_id) {
		$result = DB::table('chaps as c')
				->join('books as b', 'b.id', '=', 'c.id_book')
				->where('b.deleted', 0)
				->where('c.id_book',$book_id)
				->groupBy('c.id_trans')
				->selectRaw('COUNT(id_trans) as sum_chap')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_book_id_by_trans_id($trans_id) {
		$result = DB::table('chaps as c')
				->join('books as b', 'b.id', '=', 'c.id_book')
				->where('b.deleted', 0)
				->where('c.id_trans',$trans_id)
				->groupBy('c.id_book')
				->select('c.id_book')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_chaps_by_book_id($book_id) {
		$result = DB::table('chaps as c')
				->join('trans as t', 'c.id_trans', '=', 't.id')
				->join('books as b', 'c.id_book', '=', 'b.id')
				->where('b.deleted', 0)
				->where('id_book',$book_id)
				->select('c.*','t.name as trans_name','t.slug as trans_slug', 'b.slug as book_slug')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function count_chaps_by_book_id($book_id) {
		$result = DB::table('chaps as c')
				->join('books as b', 'b.id', '=', 'c.id_book')
				->where('b.deleted', 0)
				->where('id_book', $book_id)
				->groupBy('id_trans')
				->selectRaw('id_trans, COUNT(id_trans) as chap_count')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_chaps_not_approved($user_id) {
		$result = DB::table('chaps as c')
				->join('books as b', 'c.id_book', '=', 'b.id')
				->join('chaps_approved as ca', 'c.id', '=', 'ca.id_chap')
				->where('b.deleted', 0)
				->where('c.approved', 0)
				->where('b.id_uploader', $user_id)
				->select('c.*', 'b.name as book_name', 'ca.status as approved_status', 'ca.reply as reply')
				->get();

		return $result;
	}
}