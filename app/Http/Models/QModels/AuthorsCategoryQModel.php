<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class AuthorsCategoryQModel extends Model
{
	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_categories_by_author_id($author_id) {
		$result = DB::table('authors_category as ac')
				->join('authors as a', 'a.id', '=', 'ac.id_author')
				->join('categories as c', 'c.id', '=', 'ac.id_category')
				->where('a.deleted', 0)
				->where('id_author',$author_id)
				->select('ac.*', 'c.*')
				->get();

		return $result;
	}
}