<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class BooksFollowAdminQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_follow_by_admin_id($admin_id) {
		$result = DB::table('books_follow_admin as bf')
				->join('books as b', 'b.id', '=', 'bf.id_book')
				->where('id_admin', $admin_id)
				->select('bf.*', 'b.name', 'b.comment', 'b.view')
				->get();

		return $result;
	}
}