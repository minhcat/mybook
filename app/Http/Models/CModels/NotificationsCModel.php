<?php
namespace App\Http\Models\CModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;

class NotificationsCModel extends Model
{
	/**
	 * insert food
	 * @param array $data
	 * @return last inserted id
	 */
	public static function insert_notification($data) {
		return DB::table('notifications')->insertGetId($data);
	}

	/**
	 * delete a food
	 * @param $id int
	 * @return boolean
	 */
	public static function delete_notification($id) {
		return DB::table('notifications')
			->where('id', '=', $id)
			->delete();
	}

	/**
	 * update food
	 * @param id
	 * @param array data
	 * @return boolean
	 */
	public static function update_notification($id, $data) {
		return DB::table('notifications')
				->where('id', '=', $id)
				->update($data);
	}

	/**
	 * update food
	 * @param id
	 * @param array data
	 * @return boolean
	 */
	public static function update_notification_by_user_id($id, $data) {
		return DB::table('notifications')
				->where('id_user', '=', $id)
				->update($data);
	}
}