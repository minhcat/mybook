<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class SlidersQModel extends Model
{
	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_sliders_all() {
		$result = DB::table('sliders')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_sliders_with_number($number) {
		$result = DB::table('sliders')
				->orderBy('index','desc')
				->take($number)
				->get();

		return $result;
	}
}