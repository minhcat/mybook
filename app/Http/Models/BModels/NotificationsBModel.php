<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\NotificationsQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\CommentsQModel;

class NotificationsBModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_notifications_list($user_id) {
		$result = NotificationsQModel::get_notifications_by_user_id($user_id);

		foreach ($result as $notification) {
			$notification->image = '';
			$notification->action = '';
			$notification->info = '';
			$notification->slug = '';

			if ($notification->type == 'reply') {
				//get user name
				$user = UsersQModel::get_user_by_id($notification->id_contant);
				if ($user != null) {
					$notification->slug = $user->name_login;
				}
				//get page name
				if ($notification->page == 'read') {

					$page = ChapsQModel::get_chap_by_id($notification->id_page);
					// dd($page);
					$notification = NotificationsBModel::get_notification_reply_read($notification, $user, $page);
				} else if ($notification->page == 'book') {

					$page = BooksQModel::get_book_by_id($notification->id_page);
					//get comment
					$notification = NotificationsBModel::get_notification_reply_book($notification, $user, $page);
				}
			} elseif ($notification->type == 'tag') {
				//get user name
				$user = UsersQModel::get_user_by_id($notification->id_contant);
				if ($user != null) {
					$notification->slug = $user->name_login;
				}
				//get page name
				if ($notification->page == 'read') {

					$page = ChapsQModel::get_chap_by_id($notification->id_page);
					// dd($comment);
					$notification = NotificationsBModel::get_notification_tag_read($notification, $user, $page);
				} else if ($notification->page == 'book') {

					$page = BooksQModel::get_book_by_id($notification->id_page);
					//get comment
					$notification = NotificationsBModel::get_notification_tag_book($notification, $user, $page);
				}
			} elseif ($notification->type == 'like') {
				//get user name
				$user = UsersQModel::get_user_by_id($notification->id_contant);
				if ($user != null) {
					$notification->slug = $user->name_login;
				}
				//get page name
				if ($notification->page == 'read') {

					$page = ChapsQModel::get_chap_by_id($notification->id_page);
					// dd($comment);
					$notification = NotificationsBModel::get_notification_like_read($notification, $user, $page);
				} else if ($notification->page == 'book') {

					$page = BooksQModel::get_book_by_id($notification->id_page);
					//get comment
					$notification = NotificationsBModel::get_notification_like_book($notification, $user, $page);
				}
			} elseif ($notification->type == 'addfriend') {
				//get user name
				$user = UsersQModel::get_user_by_id($notification->id_contant);
				if ($user != null) {
					$notification->slug = $user->name_login;
				}
				$notification = NotificationsBModel::get_notification_add_friend($notification, $user);
			} elseif ($notification->type == 'newchap') {
				$chap = ChapsQModel::get_chap_by_id($notification->id_contant);
				$book = BooksQModel::get_book_by_id($chap->id_book);
				if ($book != null) {
					$notification->slug = $book->slug;
				}
				$notification = NotificationsBModel::get_notification_new_chap($notification, $chap);
			} elseif ($notification->type == 'admin') {
				$admin = new \stdClass();
				$admin->image = 'admin';
				$notification->slug = 'admin';
				$notification = NotificationsBModel::get_notification_admin($notification, $admin);
			} elseif ($notification->type == 'feedback') {
				$admin = new \stdClass();
				$admin->image = 'admin';
				$notification->slug = 'admin';
				$notification = NotificationsBModel::get_notification_feedback($notification, $admin);
			} elseif ($notification->type == 'coming') {
				$chap = ChapsQModel::get_chap_by_id($notification->id_contant);
				$book = BooksQModel::get_book_by_id($chap->id_book);
				if ($book != null) {
					$notification->slug = $book->slug;
				}
				$notification = NotificationsBModel::get_notification_chap_coming($notification, $chap);
			}
		}
		// dd($result);
		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_reply_read($notification, $user, $page) {
		$notification->image  = $user->image;
		$notification->action = '<a href="'.url('/detail/user/'.$user->name_login).'">'.$user->name.'</a> đã trả lời bình luận của bạn';
		$notification->info   = '<strong>Truyện: </strong><a href="'.url('/detail/book/'.$page->book_slug).'">'.$page->book_name.'</a> - <a href="'.url('/read/'.$page->book_slug.'/'.$page->trans_slug.'/'.$page->slug).'">'.$page->name.'</a>';
		return $notification;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_reply_book($notification, $user, $page) {
		//get comment
		$notification->image  = $user->image;
		$notification->action = '<a href="'.url('/detail/user/'.$user->name_login).'">'.$user->name.'</a> đã trả lời bình luận của bạn';
		$notification->info   = '<strong>Truyện: </strong><a href="'.url('/detail/book/'.$page->slug).'">'.$page->name.'</a>';
		return $notification;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_tag_read($notification, $user, $page) {
		$notification->image  = $user->image;
		$notification->action = '<a href="'.url('/detail/user/'.$user->name_login).'">'.$user->name.'</a> đã nhắn tới bạn trong một bình luận';
		$notification->info   = '<strong>Truyện: </strong><a href="'.url('/detail/book/'.$page->book_slug).'">'.$page->book_name.'</a> - <a href="'.url('/read/'.$page->book_slug.'/'.$page->trans_slug.'/'.$page->slug).'">'.$page->name.'</a>';
		return $notification;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_tag_book($notification, $user, $page) {
		$notification->image  = $user->image;
		$notification->action = '<a href="'.url('/detail/user/'.$user->name_login).'">'.$user->name.'</a> đã nhắn tới bạn trong một bình luận';
		$notification->info   = '<strong>Truyện: </strong><a href="'.url('/detail/book/'.$page->slug).'">'.$page->name.'</a>';
		return $notification;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_like_read($notification, $user, $page) {
		$notification->image  = $user->image;
		$notification->action = '<a href="'.url('/detail/user/'.$user->name_login).'">'.$user->name.'</a> đã thích bình luận của bạn';
		$notification->info   = '<strong>Truyện: </strong><a href="'.url('/detail/book/'.$page->book_slug).'">'.$page->book_name.'</a> - <a href="'.url('/read/'.$page->book_slug.'/'.$page->trans_slug.'/'.$page->slug).'">'.$page->name.'</a>';
		return $notification;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_like_book($notification, $user, $page) {
		$notification->image  = $user->image;
		$notification->action = '<a href="'.url('/detail/user/'.$user->name_login).'">'.$user->name.'</a> đã thích bình luận của bạn';
		$notification->info   = '<strong>Truyện: </strong><a href="'.url('/detail/book/'.$page->slug).'">'.$page->name.'</a>';
		return $notification;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_add_friend($notification, $user) {
		$notification->image  = $user->image;
		$notification->action = '<a href="'.url('/detail/user/'.$user->name_login).'">'.$user->name.'</a> đã gửi lời mời kết bạn tới bạn';
		$notification->info   = '';
		return $notification;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_new_chap($notification, $chap) {
		$notification->image  = $chap->image;
		$notification->action = '<a href="'.url('/detail/book/'.$chap->book_slug).'">'.$chap->book_name.'</a> ra <a href="'.url('/read/'.$chap->book_slug.'/'.$chap->trans_slug.'/'.$chap->slug).'">'.$chap->name.'</a>';
		$notification->info   = '';
		return $notification;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_admin($notification, $admin) {
		$notification->image  = $admin->image;
		$notification->action = '<a href="#">Ban quản trị</a> gữi thông báo đến bạn';
		$notification->info   = '';
		return $notification;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_feedback($notification, $admin) {
		$notification->image  = $admin->image;
		$notification->action = '<a href="#">Ban quản trị</a> phản hồi báo cáo của bạn';
		$notification->info   = '';
		return $notification;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	private static function get_notification_chap_coming($notification, $chap) {
		$notification->image  = $chap->image;
		$notification->action = '<a href="'.url('/detail/book/'.$chap->book_slug).'">'.$chap->book_name.'</a> sắp ra <a href="'.url('/read/'.$chap->book_slug.'/'.$chap->trans_slug.'/'.$chap->slug).'">'.$chap->name.'</a> vào lúc 12h ngày mai';
		$notification->info   = '';
		return $notification;
	}
}