<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class MailsQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_mail_by_id($id) {
		$result = DB::table('mails')
				->where('id', $id)
				->get();
				
		if (empty($result))
			return null;

		return $result[0];
	}

	/**
	 * get author by slug
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_mails_by_admin_id($admin_id) {
		$result = DB::table('mails as m')
				->join('users as u', 'u.id', '=', 'm.id_user')
				->where('id_admin', $admin_id)
				->select('m.*', 'u.name')
				->get();

		return $result;
	}

	/**
	 * get author by slug
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_mails_by_user_id($user_id) {
		$result = DB::table('mails as m')
				->join('users as u', 'u.id', '=', 'm.id_admin')
				->where('id_user', $user_id)
				->select('m.*', 'u.name')
				->get();

		return $result;
	}

	/**
	 * get author by slug
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_mails_not_seen_by_user_id($user_id) {
		$result = DB::table('mails')
				->where('id_user', $user_id)
				->where('seen', 0)
				->get();

		return $result;
	}
}