<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class AuthorsQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_author_by_id($id) {
		$result = DB::table('authors')
				->where('id', $id)
				->get();

		return $result[0];
	}

	/**
	 * get author by slug
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_author_by_slug($slug) {
		$result = DB::table('authors')
				->where('slug', $slug)
				->get();

		return $result[0];
	}

	/**
	 * get author by slug
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function search_authors_by_name($name) {
		$result = DB::table('authors')
				->where('name','LIKE', '%'.$name.'%')
				->get();

		return $result;
	}
}