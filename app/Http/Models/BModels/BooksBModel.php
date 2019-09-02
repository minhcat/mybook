<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\QModels\BooksCategoryQModel;
use App\Http\Models\CModels\BooksCategoryCModel;
use App\Http\Models\CModels\BooksCharacterCModel;
use App\Http\Models\QModels\BooksFollowAdminQModel;
use App\Http\Models\QModels\BooksRateQModel;
use App\Http\Models\QModels\BooksViewQModel;
use App\Http\Models\QModels\BooksCommentQModel;
use App\Http\Models\QModels\BooksLikeStatisticQModel;
use App\Http\Models\QModels\BooksFollowStatisticQModel;
use App\Http\Models\QModels\BooksRateStatisticQModel;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\ChapsNewQModel;
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
	public static function get_books_home_view($number, $skip) {
		$books = BooksQModel::get_books_home_view($number, $skip);
		foreach ($books as $key => $book) {
			//get category
			$book->categories = [];
			$categories = BooksCategoryQModel::get_categories_by_book_id($book->id);
			// dd($categories);
			foreach ($categories as $key => $category) {
				$book->categories[$key] = $category->vn_name;
			}
			//get chaps
			$book->max_chap = 0;
			$chaps = ChapsQModel::sum_chap_by_book_id($book->id);
			foreach ($chaps as $key => $chap) {
				if ($book->max_chap < $chap->sum_chap) {
					$book->max_chap = $chap->sum_chap;
				}
			}
		}
		return $books;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_home_update($number, $skip) {
		$books = BooksQModel::get_books_home_update($number, $skip);
		foreach ($books as $key => $book) {
			// get chap new
			$chap = ChapsNewQModel::get_chap_new_by_book_id($book->id);
			if ($chap != null) {
				$book->chap_new = $chap->name;
			} else {
				$book->chap_new = '';
			}
		}
		return $books;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_home_comment($number, $skip) {
		$books = BooksQModel::get_books_home_comment($number, $skip);
		foreach ($books as $key => $book) {
			// get category
			$book->categories = [];
			$categories = BooksCategoryQModel::get_categories_by_book_id($book->id);
			// dd($categories);
			foreach ($categories as $key => $category) {
				$book->categories[$key] = $category->vn_name;
			}
			//get chaps
			$book->max_chap = 0;
			$chaps = ChapsQModel::sum_chap_by_book_id($book->id);
			foreach ($chaps as $key => $chap) {
				if ($book->max_chap < $chap->sum_chap) {
					$book->max_chap = $chap->sum_chap;
				}
			}
		}
		return $books;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_home_rate($number, $skip) {
		$books = BooksQModel::get_books_home_rate($number, $skip);
		foreach ($books as $key => $book) {
			//get category
			$book->categories = [];
			$categories = BooksCategoryQModel::get_categories_by_book_id($book->id);
			// dd($categories);
			foreach ($categories as $key => $category) {
				$book->categories[$key] = $category->vn_name;
			}
			//get chaps
			$book->max_chap = 0;
			$chaps = ChapsQModel::sum_chap_by_book_id($book->id);
			foreach ($chaps as $key => $chap) {
				if ($book->max_chap < $chap->sum_chap) {
					$book->max_chap = $chap->sum_chap;
				}
			}
		}
		return $books;
	}

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
				$book->description_short = mb_substr($book->description, 0, 150).'...';
			//get translator
			$book->transes = [];
			$transes_id = ChapsQModel::get_trans_id_by_book_id($book->id);
			foreach ($transes_id as $key => $trans_id) {
				$trans = TransQModel::get_trans_by_id($trans_id->id_trans);
				if ($trans == null) 
					$book->transes[$key] = '';
				else
					$book->transes[$key] = $trans->name;
			}
			//get character
			$book->characters = [];
			$characters = CharactersQModel::get_character_by_book_id($book->id);
			foreach ($characters as $key => $character) {
				$book->characters[$key]       = new \stdClass;
				$book->characters[$key]->id   = $character->id;
				$book->characters[$key]->name = $character->name;
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
				$chap->images = ImagesQModel::get_images_by_chap_id($chap->id);
				$number_images = ImagesQModel::count_images_by_chap_id($chap->id);
				// dd($number_images);
				if ($number_images != null)
					$chap->number_images = $number_images->count;
				else
					$chap->number_images = 0;
			}
			$book->chaps = $chaps;
			//get rate
			$rate = [];
			$rate[5] = BooksRateQModel::get_rate_five_star_by_book_id($book->id);
			$rate[4] = BooksRateQModel::get_rate_four_star_by_book_id($book->id);
			$rate[3] = BooksRateQModel::get_rate_three_star_by_book_id($book->id);
			$rate[2] = BooksRateQModel::get_rate_two_star_by_book_id($book->id);
			$rate[1] = BooksRateQModel::get_rate_one_star_by_book_id($book->id);
			for ($i = 1; $i <= 5; $i++) {
				if ($rate[$i] == null)
					$rate[$i] = 0;
				else
					$rate[$i] = $rate[$i]->number;
			}
			$book->rates = $rate;
		}

		return $books;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_all_books() {
		$books = BooksQModel::get_all_books();

		foreach ($books as $book) {
			//shorted description
			if (strlen($book->description) >= 122)
				$book->description = mb_substr($book->description, 0, 120).'...';
			//get uploader
			$uploader = UsersQModel::get_user_by_id($book->id_uploader);
			if ($uploader != null)
				$book->uploader = $uploader->name;
			else
				$book->uploader = 'Đang cập nhật';
		}

		return $books;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_all_books_delete() {
		$books = BooksQModel::get_books_delete();

		foreach ($books as $book) {
			//shorted description
			if (strlen($book->description) >= 122)
				$book->description = mb_substr($book->description, 0, 120).'...';
			//get uploader
			$uploader = UsersQModel::get_user_by_id($book->id_uploader);
			if ($uploader != null)
				$book->uploader = $uploader->name;
			else
				$book->uploader = 'Đang cập nhật';
		}

		return $books;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_books_not_approved($admin_id) {
		// get books not approved
		$books_notapproved	= BooksQModel::get_books_not_approved_by_uploader_id($admin_id);

		// get books category
		foreach ($books_notapproved as $key => $book) {
			$categories = BooksCategoryQModel::get_categories_by_book_id($book->id);
			if (empty($categories)) {
				$book->categories = [];
			}
			foreach ($categories as $category) {
				$book->categories[$key] = $category->name;
			}
		}
		return $books_notapproved;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function create_book($new_book) {
		$book = [
			'name'			=> $new_book->name,
			'image'			=> str_slug($new_book->name,'-'),
			'slug'			=> str_slug($new_book->name,'_'),
			'other_name'	=> $new_book->other_name,
			'release_at'	=> $new_book->release_at,
			'id_author'		=> $new_book->id_author,
			'id_artist'		=> $new_book->id_artist,
			'id_uploader'	=> $new_book->id_uploader,
			'description'	=> $new_book->description,
			'keyword'		=> $new_book->keyword,
			'status'		=> $new_book->status
		];
		$id_book = BooksCModel::insert_book($book);

		//create book category
		$categories = [];
		foreach ($new_book->categories as $key => $category) {
			$categories[$key] = [
				'id_book'		=> $id_book,
				'id_category'	=> $category
			];
			BooksCategoryCModel::insert_book_category($categories[$key]);
		}

		//create book character
		$characters = [];
		foreach ($new_book->characters as $key => $character) {
			$characters[$key] = [
				'id_book'		=> $id_book,
				'id_character'	=> $character
			];
			BooksCharacterCModel::insert_book_character($characters[$key]);
		}
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function update_book($book) {
		$id = $book->id;
		$data_book = [
			'other_name'	=> $book->other_name,
			'release_at'	=> $book->release_at,
			'description'	=> $book->description,
			'status'		=> $book->status,
			'id_author'		=> $book->id_author,
			'id_artist'		=> $book->id_artist,
			'id_uploader'	=> $book->id_uploader
		];
		//update book
		BooksCModel::update_book($id, $data_book);

		//update book category
		BooksCategoryCModel::delete_book_category_by_book_id($id);
		$categories = [];
		foreach ($book->categories as $key => $category) {
			$categories[$key] = [
				'id_book'		=> $id,
				'id_category'	=> $category
			];
			BooksCategoryCModel::insert_book_category($categories[$key]);
		}

		//update book character
		BooksCharacterCModel::delete_book_character_by_book_id($id);
		$characters = [];
		foreach ($book->characters as $key => $character) {
			$characters[$key] = [
				'id_book'		=> $id,
				'id_character'	=> $character
			];
			BooksCharacterCModel::insert_book_character($characters[$key]);
		}
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_view_all($today) {
		$today = date_create($today);
		$year  = date_format($today, 'Y');
		$month = date_format($today, 'm');
		$date  = date_format($today, 'd');
		// get week
		$book_view = BooksViewQModel::get_book_view_all($date, $month, $year);
		if ($book_view == null) {
			$week = null;
		} else {
			$week  = $book_view->week;
		}
		// dd($week);
		$data['day']	= [];
		$data['week']	= [];
		$data['month']	= [];
		$data['season']	= [];
		$data['year']	= [];
		// get view day all
		for ($i = 0; $i < 7; $i++) { 
			$data['day'][$i]  = BooksViewQModel::get_book_view_day_all($i, $week, $month, $year);
			if ($data['day'][$i] == null)
				$data['day'][$i] = 0;
			else
				$data['day'][$i] = (int)$data['day'][$i]->view;
		}
		// get view week all
		for ($i = 0; $i < 5; $i++) { 
			$data['week'][$i]  = BooksViewQModel::get_book_view_week_all($i, $month, $year);
			if ($data['week'][$i] == null)
				$data['week'][$i] = 0;
			else
				$data['week'][$i] = (int)$data['week'][$i]->view;
		}
		// get view month all
		for ($i = 1; $i <= 12; $i++) { 
			$data['month'][$i]  = BooksViewQModel::get_book_view_month_all($i, $year);
			if ($data['month'][$i] == null)
				$data['month'][$i] = 0;
			else
				$data['month'][$i] = (int)$data['month'][$i]->view;
		}
		// get view season all
		for ($i = 1; $i <= 4; $i++) { 
			$data['season'][$i]  = BooksViewQModel::get_book_view_season_all($i, $year);
			if ($data['season'][$i] == null)
				$data['season'][$i] = 0;
			else
				$data['season'][$i] = (int)$data['season'][$i]->view;
		}
		// get view year all
		for ($i = 2012; $i <= 2019; $i++) { 
			$data['year'][$i]  = BooksViewQModel::get_book_view_year_all($i);
			if ($data['year'][$i] == null)
				$data['year'][$i] = 0;
			else
				$data['year'][$i] = (int)$data['year'][$i]->view;
		}
		return $data;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comment_all($today) {
		$today = date_create($today);
		$year  = date_format($today, 'Y');
		$month = date_format($today, 'm');
		$date  = date_format($today, 'd');
		// get week
		$book_view = BooksCommentQModel::get_book_comment_all($date, $month, $year);
		if ($book_view == null) {
			$week = null;
		} else {
			$week  = $book_view->week;
		}
		// dd($week);
		$data['day']	= [];
		$data['week']	= [];
		$data['month']	= [];
		$data['season']	= [];
		$data['year']	= [];
		// get view day all
		for ($i = 0; $i < 7; $i++) { 
			$data['day'][$i]  = BooksCommentQModel::get_book_comment_day_all($i, $week, $month, $year);
			if ($data['day'][$i] == null)
				$data['day'][$i] = 0;
			else
				$data['day'][$i] = (int)$data['day'][$i]->comment;
		}
		// get view week all
		for ($i = 0; $i < 5; $i++) { 
			$data['week'][$i]  = BooksCommentQModel::get_book_comment_week_all($i, $month, $year);
			if ($data['week'][$i] == null)
				$data['week'][$i] = 0;
			else
				$data['week'][$i] = (int)$data['week'][$i]->comment;
		}
		// get view month all
		for ($i = 1; $i <= 12; $i++) { 
			$data['month'][$i]  = BooksCommentQModel::get_book_comment_month_all($i, $year);
			if ($data['month'][$i] == null)
				$data['month'][$i] = 0;
			else
				$data['month'][$i] = (int)$data['month'][$i]->comment;
		}
		// get view season all
		for ($i = 1; $i <= 4; $i++) { 
			$data['season'][$i]  = BooksCommentQModel::get_book_comment_season_all($i, $year);
			if ($data['season'][$i] == null)
				$data['season'][$i] = 0;
			else
				$data['season'][$i] = (int)$data['season'][$i]->comment;
		}
		// get view year all
		for ($i = 2012; $i <= 2019; $i++) { 
			$data['year'][$i]  = BooksCommentQModel::get_book_comment_year_all($i);
			if ($data['year'][$i] == null)
				$data['year'][$i] = 0;
			else
				$data['year'][$i] = (int)$data['year'][$i]->comment;
		}
		return $data;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_like_all($today) {
		$today = date_create($today);
		$year  = date_format($today, 'Y');
		$month = date_format($today, 'm');
		$date  = date_format($today, 'd');
		// get week
		$book_like = BooksLikeStatisticQModel::get_book_like_all($date, $month, $year);
		if ($book_like == null) {
			$week = null;
		} else {
			$week  = $book_like->week;
		}
		// dd($week);
		$data['day']	= [];
		$data['week']	= [];
		$data['month']	= [];
		$data['season']	= [];
		$data['year']	= [];
		// get view day all
		for ($i = 0; $i < 7; $i++) { 
			$data['day'][$i]  = BooksLikeStatisticQModel::get_book_like_day_all($i, $week, $month, $year);
			if ($data['day'][$i] == null)
				$data['day'][$i] = 0;
			else
				$data['day'][$i] = (int)$data['day'][$i]->_like;
		}
		// get view week all
		for ($i = 0; $i < 5; $i++) { 
			$data['week'][$i]  = BooksLikeStatisticQModel::get_book_like_week_all($i, $month, $year);
			if ($data['week'][$i] == null)
				$data['week'][$i] = 0;
			else
				$data['week'][$i] = (int)$data['week'][$i]->_like;
		}
		// get view month all
		for ($i = 1; $i <= 12; $i++) { 
			$data['month'][$i]  = BooksLikeStatisticQModel::get_book_like_month_all($i, $year);
			if ($data['month'][$i] == null)
				$data['month'][$i] = 0;
			else
				$data['month'][$i] = (int)$data['month'][$i]->_like;
		}
		// get view season all
		for ($i = 1; $i <= 4; $i++) { 
			$data['season'][$i]  = BooksLikeStatisticQModel::get_book_like_season_all($i, $year);
			if ($data['season'][$i] == null)
				$data['season'][$i] = 0;
			else
				$data['season'][$i] = (int)$data['season'][$i]->_like;
		}
		// get view year all
		for ($i = 2012; $i <= 2019; $i++) { 
			$data['year'][$i]  = BooksLikeStatisticQModel::get_book_like_year_all($i);
			if ($data['year'][$i] == null)
				$data['year'][$i] = 0;
			else
				$data['year'][$i] = (int)$data['year'][$i]->_like;
		}
		return $data;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_follow_all($today) {
		$today = date_create($today);
		$year  = date_format($today, 'Y');
		$month = date_format($today, 'm');
		$date  = date_format($today, 'd');
		// get week
		$book_follow = BooksFollowStatisticQModel::get_book_follow_all($date, $month, $year);
		if ($book_follow == null) {
			$week = null;
		} else {
			$week  = $book_follow->week;
		}
		// dd($week);
		$data['day']	= [];
		$data['week']	= [];
		$data['month']	= [];
		$data['season']	= [];
		$data['year']	= [];
		// get view day all
		for ($i = 0; $i < 7; $i++) { 
			$data['day'][$i]  = BooksFollowStatisticQModel::get_book_follow_day_all($i, $week, $month, $year);
			if ($data['day'][$i] == null)
				$data['day'][$i] = 0;
			else
				$data['day'][$i] = (int)$data['day'][$i]->follow;
		}
		// get view week all
		for ($i = 0; $i < 5; $i++) { 
			$data['week'][$i]  = BooksFollowStatisticQModel::get_book_follow_week_all($i, $month, $year);
			if ($data['week'][$i] == null)
				$data['week'][$i] = 0;
			else
				$data['week'][$i] = (int)$data['week'][$i]->follow;
		}
		// get view month all
		for ($i = 1; $i <= 12; $i++) { 
			$data['month'][$i]  = BooksFollowStatisticQModel::get_book_follow_month_all($i, $year);
			if ($data['month'][$i] == null)
				$data['month'][$i] = 0;
			else
				$data['month'][$i] = (int)$data['month'][$i]->follow;
		}
		// get view season all
		for ($i = 1; $i <= 4; $i++) { 
			$data['season'][$i]  = BooksFollowStatisticQModel::get_book_follow_season_all($i, $year);
			if ($data['season'][$i] == null)
				$data['season'][$i] = 0;
			else
				$data['season'][$i] = (int)$data['season'][$i]->follow;
		}
		// get view year all
		for ($i = 2012; $i <= 2019; $i++) { 
			$data['year'][$i]  = BooksFollowStatisticQModel::get_book_follow_year_all($i);
			if ($data['year'][$i] == null)
				$data['year'][$i] = 0;
			else
				$data['year'][$i] = (int)$data['year'][$i]->follow;
		}
		return $data;
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_rate_all($today) {
		$today = date_create($today);
		$year  = date_format($today, 'Y');
		$month = date_format($today, 'm');
		$date  = date_format($today, 'd');
		// get week
		$book_rate = BooksRateStatisticQModel::get_book_rate_all($date, $month, $year);
		if ($book_rate == null) {
			$week = null;
		} else {
			$week  = $book_rate->week;
		}
		// dd($week);
		$data['sum']			= [];
		$data['sum']['day']		= [];
		$data['sum']['week']	= [];
		$data['sum']['month']	= [];
		$data['sum']['season']	= [];
		$data['sum']['year']	= [];
		// get view day all
		for ($i = 0; $i < 7; $i++) { 
			$data['sum']['day'][$i]  = [];
			// j is rate point
			$data['sum']['day'][$i][0] = 0;
			for ($j = 1; $j <= 5; $j++) { 
				$data['sum']['day'][$i][$j] = BooksRateStatisticQModel::get_book_rate_day_all($i,$week, $month, $year, $j);
				if ($data['sum']['day'][$i][$j] == null) {
					$data['sum']['day'][$i][$j] = $data['sum']['day'][$i][$j-1];
				}
				else {
					$data['sum']['day'][$i][$j] = (int)$data['sum']['day'][$i][$j]->rate + $data['sum']['day'][$i][$j-1];
				}
			}	
		}
		// get view week all
		for ($i = 0; $i < 5; $i++) { 
			$data['sum']['week'][$i]  = [];
			// j is rate point
			$data['sum']['week'][$i][0] = 0;
			for ($j = 1; $j <= 5; $j++) { 
				$data['sum']['week'][$i][$j] = BooksRateStatisticQModel::get_book_rate_week_all($i, $month, $year, $j);
				if ($data['sum']['week'][$i][$j] == null) {
					$data['sum']['week'][$i][$j] = $data['sum']['week'][$i][$j-1];
				}
				else {
					$data['sum']['week'][$i][$j] = (int)$data['sum']['week'][$i][$j]->rate + $data['sum']['week'][$i][$j-1];
				}
			}
		}
		// get view month all
		for ($i = 1; $i <= 12; $i++) { 
			$data['sum']['month'][$i]  = [];
			// j is rate point
			$data['sum']['month'][$i][0] = 0;
			for ($j = 1; $j <= 5; $j++) { 
				$data['sum']['month'][$i][$j] = BooksRateStatisticQModel::get_book_rate_month_all($i, $year, $j);
				if ($data['sum']['month'][$i][$j] == null) {
					$data['sum']['month'][$i][$j] = $data['sum']['month'][$i][$j-1];
				}
				else {
					$data['sum']['month'][$i][$j] = (int)$data['sum']['month'][$i][$j]->rate + $data['sum']['month'][$i][$j-1];
				}
			}
		}
		// get view season all
		for ($i = 1; $i <= 4; $i++) { 
			$data['sum']['season'][$i]  = [];
			// j is rate point
			$data['sum']['season'][$i][0] = 0;
			for ($j = 1; $j <= 5; $j++) { 
				$data['sum']['season'][$i][$j] = BooksRateStatisticQModel::get_book_rate_season_all($i, $year, $j);
				if ($data['sum']['season'][$i][$j] == null) {
					$data['sum']['season'][$i][$j] = $data['sum']['season'][$i][$j-1];
				}
				else {
					$data['sum']['season'][$i][$j] = (int)$data['sum']['season'][$i][$j]->rate + $data['sum']['season'][$i][$j-1];
				}
			}
		}
		// get view year all
		for ($i = 0; $i < 8; $i++) { 
			$data['sum']['year'][$i]  = [];
			// j is rate point
			$data['sum']['year'][$i][0] = 0;
			for ($j = 1; $j <= 5; $j++) { 
				$data['sum']['year'][$i][$j] = BooksRateStatisticQModel::get_book_rate_year_all($i+2012, $j);
				if ($data['sum']['year'][$i][$j] == null) {
					$data['sum']['year'][$i][$j] = $data['sum']['year'][$i][$j-1];
				}
				else {
					$data['sum']['year'][$i][$j] = (int)$data['sum']['year'][$i][$j]->rate + $data['sum']['year'][$i][$j-1];
				}
			}
		}

		// get data percent
		$data['percent']			= [];
		$data['percent']['day']		= [];
		$data['percent']['week']	= [];
		$data['percent']['month']	= [];
		$data['percent']['season']	= [];
		$data['percent']['year']	= [];
		// dd($data);
		// day
		foreach ($data['sum']['day'] as $key => $day) {
			$sum = 0;
			$data['percent']['day'][$key] = [];
			foreach ($day as $star => $number) {
				
				$data['percent']['day'][$key][$star] = $sum + $number;

				$sum += $number;
			}
			foreach ($day as $star => $number) {
				if ($sum != 0) {
					$value = $data['percent']['day'][$key][$star];
					$max   = $data['percent']['day'][$key][5];
					$data['percent']['day'][$key][$star] = ($value / $max) * 100;
				} else {
					if ($star != 0)
						$data['percent']['day'][$key][$star] = 20 * $star;
				}
			}
		}
		// week
		foreach ($data['sum']['week'] as $key => $week) {
			$sum = 0;
			$data['percent']['week'][$key] = [];
			foreach ($week as $star => $number) {
				
				$data['percent']['week'][$key][$star] = $sum + $number;

				$sum += $number;
			}
			foreach ($week as $star => $number) {
				
				if ($sum != 0) {
					$value = $data['percent']['week'][$key][$star];
					$max   = $data['percent']['week'][$key][5];
					$data['percent']['week'][$key][$star] = ($value / $max) * 100;
				} else {
					if ($star != 0)
						$data['percent']['week'][$key][$star] = 20 * $star;
				}
			}
		}
		// month
		foreach ($data['sum']['month'] as $key => $month) {
			$sum = 0;
			$data['percent']['month'][$key] = [];
			foreach ($month as $star => $number) {
				
				$data['percent']['month'][$key][$star] = $sum + $number;

				$sum += $number;
			}
			foreach ($month as $star => $number) {
				if ($sum != 0) {
					$value = $data['percent']['month'][$key][$star];
					$max   = $data['percent']['month'][$key][5];
					$data['percent']['month'][$key][$star] = ($value / $max) * 100;
				} else {
					if ($star != 0)
						$data['percent']['month'][$key][$star] = 20 * $star;
				}
			}
		}
		// season
		foreach ($data['sum']['season'] as $key => $season) {
			$sum = 0;
			$data['percent']['season'][$key] = [];
			foreach ($season as $star => $number) {
				
				$data['percent']['season'][$key][$star] = $sum + $number;

				$sum += $number;
			}
			foreach ($season as $star => $number) {
				if ($sum != 0) {
					$value = $data['percent']['season'][$key][$star];
					$max   = $data['percent']['season'][$key][5];
					$data['percent']['season'][$key][$star] = ($value / $max) * 100;
				} else {
					if ($star != 0)
						$data['percent']['season'][$key][$star] = 20 * $star;
				}
			}
		}
		// year
		foreach ($data['sum']['year'] as $key => $year) {
			$sum = 0;
			$data['percent']['year'][$key] = [];
			foreach ($year as $star => $number) {
				
				$data['percent']['year'][$key][$star] = $sum + $number;

				$sum += $number;
			}
			foreach ($year as $star => $number) {
				if ($sum != 0) {
					$value = $data['percent']['year'][$key][$star];
					$max   = $data['percent']['year'][$key][5];
					$data['percent']['year'][$key][$star] = ($value / $max) * 100;
				} else {
					if ($star != 0)
						$data['percent']['year'][$key][$star] = 20 * $star;
				}
			}
		}
		return $data;
	}
}