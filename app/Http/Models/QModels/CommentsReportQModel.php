<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class CommentsReportQModel extends Model
{
	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comment_report_by_id($id) {
		$result = DB::table('comments_report')
				->where('id',$id)
				->get();


		if (empty($result)) 
			return null;

		return $result[0];
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_report_new() {
		$result = DB::table('comments_report')
				->orderBy('id','desc')
				->take(5)
				->get();

		return $result;
	}

	/**
	 * get comment
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_report_with_punish() {
		$result = DB::table('comments_report as cr')
				->join('users as u1', 'u1.id', '=', 'cr.id_user')
				->join('users as u2', 'u2.id', '=', 'cr.id_admin')
				->join('comments as c', 'c.id', '=', 'cr.id_comment')
				->where('punish','!=','none')
				->select('cr.*', 'u1.name as user_name', 'u2.name as admin_name', 'c.content as content')
				->get();

		return $result;
	}
}