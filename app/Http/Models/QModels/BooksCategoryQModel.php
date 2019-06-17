<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksCategoryQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_by_category_id($category_id) {
		$result = DB::table('books_category')
				->where('id_category', $category_id)
				->groupBy('id_book')
				->select('id_book')
				->get();

		return $result;
	}
}