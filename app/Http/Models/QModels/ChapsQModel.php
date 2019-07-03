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
				->where('c.id',$id)
				->select('c.*', 'b.name as book_name', 'b.image', 'b.view', 'b.like','b.follow','b.description')
				->get();

		return $result[0];
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_chaps_by_book_id_trans_id($book_id, $trans_id) {
		$result = DB::table('chaps')
				->where('id_book',$book_id)
				->where('id_trans',$trans_id)
				->orderBy('index','desc')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_chap_by_book_id_trans_id_chap_slug($book_id, $trans_id, $chap_slug) {
		$result = DB::table('chaps')
				->where('id_book',$book_id)
				->where('id_trans',$trans_id)
				->where('slug',$chap_slug)
				->orderBy('index','desc')
				->get();

		return $result[0];
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_trans_id_by_book_id($book_id) {
		$result = DB::table('chaps')
				->where('id_book',$book_id)
				->groupBy('id_trans')
				->select('id_trans')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_book_id_by_trans_id($trans_id) {
		$result = DB::table('chaps')
				->where('id_trans',$trans_id)
				->groupBy('id_book')
				->select('id_book')
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
		$result = DB::table('chaps')
				->where('id_book', $book_id)
				->groupBy('id_trans')
				->selectRaw('id_trans, COUNT(id_trans) as chap_count')
				->get();

		return $result;
	}
}