<?php

namespace App\Http\Models\CModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class ImagesCModel extends Model
{
	/**
	 * insert food
	 * @param array $data
	 * @return last inserted id
	 */
	public static function insert_image($data) {
		return DB::table('images')->insertGetId($data);
	}

	/**
	 * delete a food
	 * @param $id int
	 * @return boolean
	 */
	public static function delete_image($id) {
		return DB::table('images')
			->where('id', '=', $id)
			->delete();
	}

	/**
	 * delete a food
	 * @param $id int
	 * @return boolean
	 */
	public static function delete_images_by_chap_id($id_chap) {
		return DB::table('images')
			->where('id_chap', '=', $id_chap)
			->delete();
	}

	/**
	 * update food
	 * @param id
	 * @param array data
	 * @return boolean
	 */
	public static function update_image($id, $data) {
		return DB::table('images')
				->where('id', '=', $id)
				->update($data);
	}
}