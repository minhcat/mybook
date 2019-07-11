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
use App\Http\Models\CModels\AuthorsCModel;
use App\Http\Models\CModels\AuthorsCategoryCModel;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class AuthorsBModel extends Model
{
	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_authors_all() {
		$authors = AuthorsQModel::get_authors_all_2();
		foreach ($authors as $author) {
			$categories = AuthorsCategoryQModel::get_categories_by_author_id($author->id);

			foreach ($categories as $key => $category) {
				$author->categories[$key] = $category->name;
			}
		}
		return $authors;
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
			'image'			=> str_slug($new_author->name, '-'),
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
}
