<?php

namespace App\Http\Models;

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
				->select('c.*', 'b.name as book_name', 'b.image')
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
}