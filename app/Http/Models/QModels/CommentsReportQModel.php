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
	public static function get_comments_report_new() {
		$result = DB::table('comments_report')
				->orderBy('id','desc')
				->take(5)
				->get();

		return $result;
	}
}