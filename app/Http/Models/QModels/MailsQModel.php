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
	public static function get_mail_by_admin_id($admin_id) {
		$result = DB::table('mails')
				->where('id_admin', $admin_id)
				->get();

		return $result;
	}
}