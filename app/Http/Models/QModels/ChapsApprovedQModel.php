<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class ChapsApprovedQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_chap_approved_by_chap_id($chap_id) {
		$result = DB::table('chaps_approved')
				->where('id_chap', $chap_id)
				->get();
		if (empty($result))
			return null;
		return $result[0];
	}
}