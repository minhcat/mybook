<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\NotificationsAdminQModel;
use App\Http\Models\QModels\NotificationsGroupQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\CommentsQModel;

class NotificationsAdminBModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_notifications_send($admin_id) {
		$noties = NotificationsAdminQModel::get_notifications_by_admin_id($admin_id);
		$codes  = [];
		$result = [];
		//delete noti group
		foreach ($noties as $noti) {
			if ($noti->id_group != null) {
				$check = 0;
				foreach ($codes as $code) {
					if ($noti->code == $code) {
						$check = 1;
						break;
					}
				}
				array_push($codes, $noti->code);
				if ($check == 0) {
					array_push($result, $noti);
				}
			} else {
				array_push($result, $noti);
			}
		}
		//add info
		foreach ($noties as $noti) {
			$admin = UsersQModel::get_user_by_id($noti->id_admin);
			$noti->send_name = $admin->name;
			if ($noti->id_user != null) {
				$user = UsersQModel::get_user_by_id($noti->id_user);
				$noti->receive_name = $user->name;
			}
			if ($noti->id_group != null) {
				$group = NotificationsGroupQModel::get_group_by_id($noti->id_group);
				$noti->group_name = $group->group;
			}
		}
		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_notifications_receive($user_id) {
		$noties = NotificationsAdminQModel::get_notifications_by_user_id($user_id);
		//add data noti group
		$groups = NotificationsAdminQModel::get_notifications_group_by_user_id($user_id);
		foreach ($groups as $group) {
			array_push($noties, $group);
		}
		//add info
		foreach ($noties as $noti) {
			$admin = UsersQModel::get_user_by_id($noti->id_admin);
			$noti->send_name = $admin->name;
			if ($noti->id_user != null) {
				$user = UsersQModel::get_user_by_id($noti->id_user);
				$noti->receive_name = $user->name;
			}
			if ($noti->id_group != null) {
				$group = NotificationsGroupQModel::get_group_by_id($noti->id_group);
				$noti->group_name = $group->group;
			}
		}
		return $noties;
	}
}