<?php

namespace App\Http\Models\CModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class TransCModel extends Model
{
	/**
	 * insert food
	 * @param array $data
	 * @return last inserted id
	 */
	public static function insert_trans($data) {
		return DB::table('trans')->insertGetId($data);
	}

	/**
	 * delete a food
	 * @param $id int
	 * @return boolean
	 */
	public static function delete_trans($id) {
		return DB::table('trans')
			->where('id', '=', $id)
			->delete();
	}

	/**
	 * update food
	 * @param id
	 * @param array data
	 * @return boolean
	 */
	public static function update_trans($id, $data) {
		return DB::table('trans')
				->where('id', '=', $id)
				->update($data);
	}
}