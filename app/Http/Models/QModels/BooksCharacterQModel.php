<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksCharacterQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_by_character_id($character_id) {
		$result = DB::table('books_character')
				->where('id_character', $character_id)
				->groupBy('id_book')
				->select('id_book')
				->get();

		return $result;
	}

	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_characters_by_book_id($book_id) {
		$result = DB::table('books_character as bc')
				->join('characters as c', 'c.id', '=', 'bc.id_character')
				->where('id_book',$book_id)
				->get();

		return $result;
	}
}