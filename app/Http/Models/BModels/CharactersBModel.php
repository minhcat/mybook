<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\CModels\CharactersCModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksCharacterQModel;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class CharactersBModel extends Model
{

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_characters_all() {
		$characters = CharactersQModel::get_characters_all();

		foreach ($characters as $character) {
			$books_id = BooksCharacterQModel::get_books_by_character_id($character->id);
			$character->books = [];

			foreach ($books_id as $key => $book_id) {
				$book = BooksQModel::get_book_by_id($book_id->id_book);
				if ($book != null)
					$character->books[$key] = $book->name;
			}
		}
		return $characters;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function create_character($new_character) {
		// insert character
		$character = [
			'name'			=> $new_character->name,
			'image'			=> ($new_character->is_image) ? str_slug($new_character->name, '-') : '',
			'slug'			=> str_slug($new_character->name, '_'),
			'gender'		=> $new_character->gender,
			'type'			=> $new_character->type,
			'birth'			=> $new_character->birthday,
			'family'		=> $new_character->family,
			'job'			=> $new_character->job,
			'description'	=> $new_character->description
		];

		$id_character = CharactersCModel::insert_character($character);
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function update_character($update_character) {
		$id = $update_character->id;
		// insert character
		$character = [
			'name'			=> $update_character->name,
			'slug'			=> str_slug($update_character->name, '_'),
			'gender'		=> $update_character->gender,
			'type'			=> $update_character->type,
			'birth'			=> $update_character->birthday,
			'family'		=> $update_character->family,
			'job'			=> $update_character->job,
			'hobby'			=> $update_character->hobby,
			'description'	=> $update_character->description
		];
		if ($update_character->is_image) {
			$character['image'] = str_slug($update_character->name);
		}

		CharactersCModel::update_character($id, $character);
	}
}