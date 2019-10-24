<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\MailsQModel;
use App\Http\Models\QModels\UsersQModel;

class MailsBModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_mails_receive($user_id) {
		$mails = MailsQModel::get_mails_by_user_id($user_id);
		foreach ($mails as $mail) {
			$mail->content = substr($mail->content, 0, 35).'...';
		}
		return $mails;
	}
}