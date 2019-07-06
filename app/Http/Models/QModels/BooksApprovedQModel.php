<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksApprovedQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_book_approved_by_book_id($book_id) {
		$result = DB::table('books_approved')
				->where('id_book', $book_id)
				->get();
		if (empty($result))
			return null;
		return $result[0];
	}
}