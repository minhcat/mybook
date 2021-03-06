<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class ImagesQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_images_by_chap_id($id) {
		$result = DB::table('images')
				->where('id_chap', $id)
				->get();

		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function count_images_by_chap_id($id) {
		$result = DB::table('images')
				->where('id_chap', $id)
				->groupBy('id_chap')
				->selectRaw('id, COUNT(id) as count')
				->get();

		if (!empty($result))
			return $result[0];
		
		return null;
	}
}