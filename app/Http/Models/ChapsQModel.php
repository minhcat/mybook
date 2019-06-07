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
	public static function get_trans_id_by_book_id($book_id) {
		$result = DB::table('chaps')
				->where('id_book',$book_id)
				->groupBy('id_trans')
				->select('id_trans')
				->get();

		return $result;
	}
}