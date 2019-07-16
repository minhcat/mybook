<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\CModels\TransCModel;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class TransBModel extends Model
{
	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_transes_all() {
		$transes = TransQModel::get_trans_all();
		foreach ($transes as $trans) {
			$books = TransQModel::get_books_by_trans_id($trans->id);
			$trans->books = count($books);
		}
		return $transes;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function create_trans($new_trans) {
		// insert trans
		$trans = [
			'name'			=> $new_trans->name,
			'image'			=> ($new_trans->is_image) ? str_slug($new_trans->name, '-') : '',
			'slug'			=> str_slug($new_trans->name, '_'),
			'leader'		=> $new_trans->leader,
			'member'		=> $new_trans->member,
			'facebook'		=> $new_trans->facebook,
			'website'		=> $new_trans->website,
			'description'	=> $new_trans->description
		];

		$id_trans = TransCModel::insert_trans($trans);
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function update_author($update_author) {
		$id = $update_author->id;
		// update author
		$author = [
			'name'			=> $update_author->name,
			'image'			=> ($update_author->is_image) ? str_slug($update_author->name, '-') : null,
			'slug'			=> str_slug($update_author->name, '_'),
			'gender'		=> $update_author->gender,
			'type'			=> $update_author->type,
			'facebook'		=> $update_author->facebook,
			'twitter'		=> $update_author->twitter,
			'website'		=> $update_author->website,
			'description'	=> $update_author->description
		];

		AuthorsCModel::update_author($id, $author);

		// update author category
		AuthorsCategoryCModel::delete_author_category_by_author_id($id);
		$categories = [];
		foreach ($update_author->categories as $key => $category) {
			$categories[$key] = [
				'id_author'		=> $id,
				'id_category'	=> $category
			];
			AuthorsCategoryCModel::insert_author_category($categories[$key]);
		}
	}
}
