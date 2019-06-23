<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksCategoryQModel;
use App\Http\Models\QModels\BooksFollowAdminQModel;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\QModels\ImagesQModel;
use App\Http\Models\QModels\CharactersQModel;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class BooksBModel extends Model
{
	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_random_sidebar($number) {
		$result = BooksQModel::get_books_random($number);
		foreach ($result as $key => $book) {
			if (strlen($book->name) >= 22)
				$book->name = substr($book->name, 0, 20).'...';
			$book->description = substr($book->description, 0, 45).'...';
		}

		return $result;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function search_books_general($books, $search) {
		$books_filter = $books;
		// dd($result);
		if ($search->year != '0') {
			$books_filter = BooksBModel::filter_books_by_year($books_filter, $search->year);
			// dd($books_filter);
		} 
		if ($search->status != '0') {
			$search->status = (int)$search->status;
			$search->status = $search->status - 1;
			$books_filter = BooksBModel::filter_books_by_status($books_filter, $search->status);
			// dd($books_filter);
		}
		if ($search->chap != '0') {
			$search->chap = (int)$search->chap;
			$books_filter = BooksBModel::filter_books_by_chap($books_filter, $search->chap);
			// dd($books_filter);
		}
		if ($search->author != '') {
			$books_filter = BooksBModel::filter_books_by_author($books_filter, $search->author);
			// dd($books_filter);
		}
		if ($search->character != '') {
			$books_filter = BooksBModel::filter_books_by_character($books_filter, $search->character);
			// dd($books_filter);
		}
		if ($search->trans != '') {
			$books_filter = BooksBModel::filter_books_by_trans($books_filter, $search->trans);
			// dd($books_filter);
		}
		if ($search->sort == '0'){
			if ($search->order == '0')
				$books_filter = collect($books_filter)->sortBy('update_at')->toArray();
			elseif ($search->order == '1')
				$books_filter = collect($books_filter)->sortBy('update_at')->reverse()->toArray();
		}
		elseif ($search->sort == '1'){
			if ($search->order == '0')
				$books_filter = collect($books_filter)->sortBy('name')->toArray();
			elseif ($search->order == '1')
				$books_filter = collect($books_filter)->sortBy('name')->reverse()->toArray();
		}
		elseif ($search->sort == '2') {
			if ($search->order == '0')
				$books_filter = collect($books_filter)->sortBy('view')->toArray();
			elseif ($search->order == '1')
				$books_filter = collect($books_filter)->sortBy('view')->reverse()->toArray();
		}
		$result = [];
		if (count($books_filter)>12) {
			for ($i=0; $i < 12; $i++) { 
				$result[$i] = $books_filter[$i];
			}
		}
		
		return $books_filter;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function filter_books_by_year($books, $year) {
		$result = [];
		foreach ($books as $book) {
			$first_date = date_create($year.'-01-01');
			$last_date  = date_create($year.'-12-31');
			$book_date  = date_create($book->release_at);
			if ($book_date >= $first_date && $book_date <= $last_date)
				array_push($result, $book);
		}
		return $result;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function filter_books_by_status($books, $status) {
		$result = [];
		foreach ($books as $book) {
			if ($book->status == $status)
				array_push($result, $book);
		}
		return $result;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function filter_books_by_chap($books, $chap) {
		$result = [];
		//get start to end number chap
		if ($chap == 1) {
			$start_chap = Constants::START_CHAP_ONE;
			$end_chap   = Constants::END_CHAP_ONE;
		} elseif ($chap == 10) {
			$start_chap = Constants::START_CHAP_TWO;
			$end_chap   = Constants::END_CHAP_TWO;
		} elseif ($chap == 20) {
			$start_chap = Constants::START_CHAP_THREE;
			$end_chap   = Constants::END_CHAP_THREE;
		} elseif ($chap == 50) {
			$start_chap = Constants::START_CHAP_FOUR;
			$end_chap   = Constants::END_CHAP_FOUR;
		} elseif ($chap == 100) {
			$start_chap = Constants::START_CHAP_FIVE;
			$end_chap   = Constants::END_CHAP_FIVE;
		}
		//filter books
		foreach ($books as $book) {
			$chap_counts = ChapsQModel::count_chaps_by_book_id($book->id);
			$max = 0;
			foreach ($chap_counts as $chap_count) {
				if ($max < $chap_count->chap_count)
					$max = $chap_count->chap_count;
			}
			if ($max >= $start_chap && $max <= $end_chap)
				array_push($result, $book);
		}
		return $result;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function filter_books_by_author($books, $author_name) {
		$result = [];
		foreach ($books as $book) {
			$authors = AuthorsQModel::search_authors_by_name($author_name);
			foreach ($authors as $author) {
				if ($book->id_author == $author->id) {
					array_push($result, $book);
					break;
				}
			}
			
		}
		return $result;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function filter_books_by_character($books, $character_name) {
		$result = [];
		foreach ($books as $book) {
			$characters = CharactersQModel::search_characters_by_name($character_name);
			foreach ($characters as $character) {
				if ($character->id_book == $book->id) {
					array_push($result, $book);
					break;
				}
			}
			
		}
		return $result;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function filter_books_by_trans($books, $trans_name) {
		$result = [];
		foreach ($books as $book) {
			$transes = TransQModel::search_trans_by_name($trans_name);
			// dd($transes);
			foreach ($transes as $trans) {
				$chaps = ChapsQModel::get_book_id_by_trans_id($trans->id);
				foreach ($chaps as $chap) {
					if ($chap->id_book == $book->id) {
						array_push($result, $book);
						break 2;
					}
				}
			}
			
		}
		return $result;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function filter_books_by_category($books, $category_list) {
		$result = [];
		$category_array = json_decode($category_list);
		// dd($category_array);
		foreach ($books as $book) {
			foreach ($category_array as $category) {
				$category_check = CategoriesQModel::get_category_by_name($category);
				$category_id = $category_check->id;
				$books_category = BooksCategoryQModel::get_books_by_category_id($category_id);
				foreach ($books_category as $book_category) {
					if ($book->id == $book_category->id_book) {
						array_push($result, $book);
						break 2;
					}
				}
			}
			
		}
		return $result;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_follow_admin($admin_id) {
		$books = BooksFollowAdminQModel::get_books_follow_by_admin_id($admin_id);
		// dd($books);
		foreach ($books as $book) {
			$book->categories = [];
			$categories = BooksCategoryQModel::get_categories_by_book_id($book->id);
			// dd($categories);
			foreach ($categories as $key => $category) {
				$book->categories[$key] = $category->name;
			}
		}
		
		return $books;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_upload($admin_id) {
		$books = BooksQModel::get_books_by_uploader_id($admin_id);
		// dd($books);
		foreach ($books as $book) {
			//get category
			$book->categories = [];
			$categories = BooksCategoryQModel::get_categories_by_book_id($book->id);
			// dd($categories);
			foreach ($categories as $key => $category) {
				$book->categories[$key] = $category->name;
			}
			//shorted description
			if (strlen($book->description) >= 152)
				$book->description = mb_substr($book->description, 0, 150).'...';
			//get translator
			$book->transes = [];
			$transes_id = ChapsQModel::get_trans_id_by_book_id($book->id);
			foreach ($transes_id as $key => $trans_id) {
				$trans = TransQModel::get_trans_by_id($trans_id->id_trans);
				$book->transes[$key] = $trans->name;
			}
			//get character
			$book->characters = [];
			$characters = CharactersQModel::get_character_by_book_id($book->id);
			foreach ($characters as $key => $character) {
				$book->characters[$key] = $character->name;
			}
			//get author, artist
			$author = AuthorsQModel::get_author_by_id($book->id_author);
			if ($author != null)
				$book->author = $author->name;
			else
				$book->author = 'Đang cập nhật';

			$artist = AuthorsQModel::get_author_by_id($book->id_artist);
			if ($artist != null)
				$book->artist = $artist->name;
			else
				$book->artist = 'Đang cập nhật';
			//get chaps
			$chaps = ChapsQModel::get_chaps_by_book_id($book->id);
			foreach ($chaps as $key => $chap) {
				$number_images = ImagesQModel::count_images_by_chap_id($chap->id);
				// dd($number_images);
				if ($number_images != null)
					$chap->number_images = $number_images->count;
				else
					$chap->number_images = 0;
			}
			$book->chaps = $chaps;
			
		}

		return $books;
	}
}