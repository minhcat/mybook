<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class ChapsNewQModel extends Model
{
	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_chap_new_by_book_id($book_id) {
		$result = DB::table('chaps_new')
				->where('id_book',$book_id)
				->first();

		return $result;
	}
}