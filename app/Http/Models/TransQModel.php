<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class TransQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_trans_by_id($id) {
		$result = DB::table('trans')
				->where('id', $id)
				->get();

		return $result[0];
	}

	/**
	 * get trans by slug
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_trans_by_slug($slug) {
		$result = DB::table('trans')
				->where('slug', $slug)
				->get();

		return $result[0];
	}

	/**
	 * get trans by slug
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_by_trans_id($trans_id) {
		$result = DB::table('trans as t')
				->join('chaps as c', 'c.id_trans', '=', 't.id')
				->join('books as b', 'c.id_book', '=', 'b.id')
				->groupBy('b.id')
				->where('t.id', $trans_id)
				->select('b.name', 'b.create_at')
				->get();

		return $result;
	}
}