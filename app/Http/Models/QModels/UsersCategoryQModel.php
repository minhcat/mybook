<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class UsersCategoryQModel extends Model
{
	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_categories_by_user_id($user_id) {
		$result = DB::table('users_category as uc')
				->join('categories as c', 'c.id', '=', 'uc.id_category')
				->where('id_user',$user_id)
				->select('uc.*', 'c.slug', 'c.vn_name')
				->get();

		return $result;
	}
}