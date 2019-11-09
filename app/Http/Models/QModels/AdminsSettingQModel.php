<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class AdminsSettingQModel extends Model
{
	/**
	 * get categories by name
	 * @param 
	 * @return object|boolean : all properties from `categories` table
	 */
	public static function get_setting_by_admin_id($admin_id) {
		$result = DB::table('admins_setting')
				->where('id_admin',$admin_id)
				->first();

		return $result;
	}
}