<?php
namespace App\Http\Helpers;

use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksCategoryQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\TransQModel;

class Helper {
	/**
	 * Convert string uppercase first letter
	 * @param string
	 * @return string
	 */
	public static function convert_up_first_string($string) {
		return ucwords($string);
	}
	
	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_background($array, $bg_array) {
		$i = 0;
		foreach ($array as $item) {
			$i++;
			$item->index = $i;
			if ($i <= count($bg_array))
				$item->background = $bg_array[$i - 1];
			else
				$item->background = $bg_array[count($bg_array) - 1];
		}
		return $array;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_background_else($array, $bg, $number_index) {
		$i = $number_index;
		foreach ($array as $item) {
			$i++;
			$item->index = $i;
			$item->background = $bg;
		}
		return $array;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function get_week_from_time($time) {
		$date  = date_format($time, 'd');
		$week  = 1;
		while ($date > 7) {
			$week ++;
			$date -= 7;
		}
		
		return $week;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function get_season_from_time($time) {
		$month = date_format($time, 'm');

		if ($month == 1 || $month == 2 || $month == 3) {
			$season = 1;
		} elseif ($month == 4 || $month == 5 || $month == 6) {
			$season = 2;
		} elseif ($month == 7 || $month == 8 || $month == 9) {
			$season = 3;
		} elseif ($month == 10 || $month == 11 || $month == 12) {
			$season = 4;
		}

		return $season;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_category_from_book($book) {
		$categories = BooksCategoryQModel::get_categories_by_book_id($book->id);
		$book->categories = [];
		foreach ($categories as $key => $category) {
			$book->categories[$key] = [
				'slug' => $category->slug,
				'name' => $category->vn_name,
			];
		}
		return $book;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function short_description($item, $number) {
		$item->description = str_replace('<p>', '', $item->description);
		$item->description = str_replace('</p>', '', $item->description);
		if (strlen($item->description) >= $number) {
			$item->description = substr($item->description, 0, $number).'...';
		}
		return $item;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_book_from_array($books_check, $books_add) {
		// dd($books_check);
		// dd($books_add);
		$result = $books_check;
		foreach ($books_add as $book_add) {
			$is_check = true;
			foreach ($books_check as $book_check) {
				// dd($books_check);
				if ($book_check->id == $book_add->id) {
					$is_check = false;
				}
			}
			if ($is_check) {
				$book = BooksQModel::get_book_by_id($book_add->id);
				$book = Helper::add_category_from_book($book);
				$book = Helper::short_description($book, 200);
				array_push($result, $book);
			}
		}
		return $result;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_book_from_array_comment($books, $comments) {
		// dd($books_check);
		// dd($books_add);
		$result = $books;
		foreach ($comments as $comment) {
			if ($comment->page == 'book') {
				$is_check = true;
				foreach ($books as $book) {
					// dd($books_check);
					if ($book->id == $comment->id_page) {
						$is_check = false;
					}
				}
				if ($is_check) {
					$book = BooksQModel::get_book_by_id($comment->id_page);
					array_push($result, $book);
				}
			} 
		}
		$books = $result;
		foreach ($comments as $comment) {
			if ($comment->page == 'read') {
				$is_check = true;
				foreach ($books as $book) {
					// dd($books_check);
					if ($book->id == $comment->book_id) {
						$is_check = false;
					}
				}
				if ($is_check) {
					$book = BooksQModel::get_book_by_id($comment->book_id);
					array_push($result, $book);
				}
			}
		}
		return $result;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_user_from_array_comment($users, $comments) {
		// dd($users);
		// dd($comments);
		$result = $users;
		foreach ($comments as $comment) {
			$is_check = true;
			foreach ($users as $user) {
				// dd($books_check);
				if ($user->id == $comment->id_user) {
					$is_check = false;
				}
			}
			if ($is_check) {
				$user = UsersQModel::get_user_by_id($comment->id_user);
				$user = Helper::short_description($user, 150);
				array_push($result, $user);
			}
		}
		$users = $result;
		foreach ($comments as $comment) {
			if ($comment->page == 'user') {
				$is_check = true;
				foreach ($users as $user) {
					// dd($books_check);
					if ($user->id == $comment->page_id) {
						$is_check = false;
					}
				}
				if ($is_check) {
					$user = UsersQModel::get_user_by_id($comment->page_id);
					$user = Helper::short_description($user, 150);
					array_push($result, $user);
				}
			}
		}
		return $result;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_character_from_array_comment($characters, $comments) {
		// dd($users);
		// dd($comments);
		$result = $characters;
		foreach ($comments as $comment) {
			if ($comment->page == 'character') {
				$is_check = true;
				foreach ($characters as $character) {
					// dd($books_check);
					if ($character->id == $comment->page_id) {
						$is_check = false;
					}
				}
				if ($is_check) {
					$character = CharactersQModel::get_character_by_id($comment->page_id);
					$character = Helper::short_description($character, 150);
					array_push($result, $character);
				}
			}
		}
		return $result;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_author_from_array_comment($authors, $comments) {
		// dd($users);
		// dd($comments);
		$result = $authors;
		foreach ($comments as $comment) {
			if ($comment->page == 'author') {
				$is_check = true;
				foreach ($authors as $author) {
					// dd($books_check);
					if ($author->id == $comment->page_id) {
						$is_check = false;
					}
				}
				if ($is_check) {
					$author = AuthorsQModel::get_author_by_id($comment->page_id);
					$author = Helper::short_description($author, 150);
					array_push($result, $author);
				}
			}
		}
		return $result;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_trans_from_array_comment($transes, $comments) {
		// dd($users);
		// dd($comments);
		$result = $transes;
		foreach ($comments as $comment) {
			if ($comment->page == 'trans') {
				$is_check = true;
				foreach ($transes as $trans) {
					// dd($books_check);
					if ($trans->id == $comment->page_id) {
						$is_check = false;
					}
				}
				if ($is_check) {
					$trans = TransQModel::get_trans_by_id($comment->page_id);
					$trans = Helper::short_description($trans, 150);
					array_push($result, $trans);
				}
			}
		}
		return $result;
	}
}
