<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class CharactersQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_character_by_id($id) {
		$result = DB::table('characters')
				->where('id', $id)
				->get();

		return $result[0];
	}

	/**
	 * get all books
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_character_by_slug($slug) {
		$result = DB::table('characters')
				->where('slug',$slug)
				->get();

		return $result[0];
	}
}