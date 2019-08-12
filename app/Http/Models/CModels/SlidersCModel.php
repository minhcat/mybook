<?php

namespace App\Http\Models\CModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class SlidersCModel extends Model
{
	/**
	 * insert food
	 * @param array $data
	 * @return last inserted id
	 */
	public static function insert_slider($data) {
		return DB::table('sliders')->insertGetId($data);
	}

	/**
	 * delete a food
	 * @param $id int
	 * @return boolean
	 */
	public static function delete_slider($id) {
		return DB::table('sliders')
			->where('id', '=', $id)
			->delete();
	}

	/**
	 * update food
	 * @param id
	 * @param array data
	 * @return boolean
	 */
	public static function update_slider($id, $data) {
		return DB::table('sliders')
				->where('id', '=', $id)
				->update($data);
	}
}