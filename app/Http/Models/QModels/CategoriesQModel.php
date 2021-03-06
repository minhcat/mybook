<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class CategoriesQModel extends Model
{
	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_category_by_name($name) {
		$result = DB::table('categories')
				->where('name',$name)
				->get();

		return $result[0];
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_categories_all() {
		$result = DB::table('categories')
				->get();

		return $result;
	}
}