<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\CategoriesQModel;

class CategoriesBModel extends Model
{
	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_categories_menu() {
		$categories = CategoriesQModel::get_categories_all();
		// dd($categories);
		$result = [];
		$group = [];
		$i = 0;
		foreach ($categories as $key => $category) {
			array_push($group, $category);
			if ($key == ($i+1)*4-1) {
				$result[$i] = $group;
				$group = [];
				$i = $i + 1;
			}
			
		}
		return $result;
	}
}