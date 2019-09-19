<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class CharactersBookQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_characters_by_book_id($book_id) {
		$result = DB::table('characters_book as cb')
				->join('characters as c', 'c.id', '=', 'cb.id_character')
				->where('c.deleted', 0)
				->where('cb.id_book', $book_id)
				->get();

		return $result;
	}
}