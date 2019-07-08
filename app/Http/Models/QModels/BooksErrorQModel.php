<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksErrorQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_error_by_uploader_id($uploader_id) {
		$result = DB::table('books_error as be')
				->join('books as b', 'b.id', '=', 'be.id_book')
				->where('b.id_uploader', $uploader_id)
				->select('be.*', 'b.name', 'b.slug')
				->get();

		return $result;
	}
}