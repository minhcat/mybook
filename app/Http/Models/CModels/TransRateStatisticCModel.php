<?php

namespace App\Http\Models\CModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class TransRateStatisticCModel extends Model
{
	/**
	 * insert food
	 * @param array $data
	 * @return last inserted id
	 */
	public static function insert_trans_rate($data) {
		return DB::table('trans_rate_statistic')->insertGetId($data);
	}

	/**
	 * delete a food
	 * @param $id int
	 * @return boolean
	 */
	public static function delete_trans_rate($id) {
		return DB::table('trans_rate_statistic')
			->where('id', '=', $id)
			->delete();
	}

	/**
	 * update food
	 * @param id
	 * @param array data
	 * @return boolean
	 */
	public static function update_trans_rate($id, $data) {
		return DB::table('trans_rate_statistic')
				->where('id', '=', $id)
				->update($data);
	}
}