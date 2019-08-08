<?php

namespace App\Http\Models\QModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class SystemQModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_variable_by_name($name) {
		$result = DB::table('system')
				->where('variable', $name)
				->get();
				
		if (empty($result))
			return null;

		return $result[0];
	}
}