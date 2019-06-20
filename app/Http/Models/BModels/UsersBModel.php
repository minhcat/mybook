<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksCategoryQModel;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersFollowQModel;
use App\Http\Models\QModels\CommentsQModel;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class UsersBModel extends Model
{
	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_user_follow($user_mod_id) {
		$users = UsersFollowQModel::get_user_follow_by_user_mod_id($user_mod_id);
		foreach ($users as $key => $user) {
			$sum_comments = CommentsQModel::get_number_comments_by_user_id($user->id);
			$new_comment  = CommentsQModel::get_comments_new_by_user_id($user->id);
			$user->number = $sum_comments;
			$user->new_comment = $new_comment;
		}

		return $users;
	}
}
