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
		//add info and short content
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
			$noti->content = substr($noti->content, 0, 30).'...';
		}
		return $noties;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_notifications_not_seen($user_id) {
		$result = [];

		$noti1     = NotificationsAdminQModel::get_notifications_not_seen_by_user_id($user_id);
		$noti2     = NotificationsAdminQModel::get_notifications_group_by_user_id($user_id);
		$noti_seen = NotificationsAdminQModel::get_notifications_seen_group_by_user_id($user_id);

		foreach ($noti1 as $noti) {
			array_push($result, $noti);
		}

		foreach ($noti2 as $noti_group) {
			$check = true;
			foreach ($noti_seen as $noti) {
				if ($noti->id_notification == $noti_group->id) {
					$check = false;
					break;
				}
			}
			if ($check) {
				array_push($result, $noti_group);
			}
		}

		return $result;
	}
}