<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksCategoryQModel;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\AuthorsCategoryQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersFollowQModel;
use App\Http\Models\QModels\CommentsQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\CModels\AuthorsCModel;
use App\Http\Models\CModels\AuthorsCategoryCModel;

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
	public static function create_author($new_author) {
		// insert author
		$author = [
			'name'			=> $new_author->name,
			'image'			=> ($new_author->is_image) ? str_slug($new_author->name, '-') : '',
			'slug'			=> str_slug($new_author->name, '_'),
			'gender'		=> $new_author->gender,
			'type'			=> $new_author->type,
			'facebook'		=> $new_author->facebook,
			'twitter'		=> $new_author->twitter,
			'website'		=> $new_author->website,
			'description'	=> $new_author->description
		];

		$id_author = AuthorsCModel::insert_author($author);

		// insert author category
		$categories = [];
		foreach ($new_author->categories as $key => $category) {
			$categories[$key] = [
				'id_author'		=> $id_author,
				'id_category'	=> $category
			];
			AuthorsCategoryCModel::insert_author_category($categories[$key]);
		}
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
