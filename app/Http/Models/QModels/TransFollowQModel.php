<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class TransFollowQModel extends Model
{
	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_trans_follow_by_user_id($user_id) {
		$result = DB::table('trans_follow')
				->where('id_user', $user_id)
				->first();

		return $result;
	}

	/**
	 * get book view current date
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_trans_follow_by_user_id_and_trans_id($user_id, $trans_id) {
		$result = DB::table('trans_follow')
				->where('id_user', $user_id)
				->where('id_trans', $trans_id)
				->first();

		return $result;
	}
}