<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class ChapsErrorQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_chaps_error_by_uploader_id($uploader_id) {
		$result = DB::table('chaps_error as ce')
				->join('chaps as c', 'c.id', '=', 'ce.id_chap')
				->join('books as b', 'b.id', '=', 'c.id_book')
				->join('trans as t', 't.id', '=', 'c.id_trans')
				->where('b.id_uploader', $uploader_id)
				->select('ce.*', 'b.name as book_name', 'b.slug as book_slug', 't.slug as trans_slug', 'c.slug as chap_slug', 'c.id_book', 'c.name')
				->get();

		return $result;
	}
}