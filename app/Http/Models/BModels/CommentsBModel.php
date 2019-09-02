<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\CommentsQModel;
use App\Http\Models\QModels\CommentsReportQModel;
use App\Http\Models\QModels\CommentsSaveQModel;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\CheckwordsQModel;

class CommentsBModel extends Model
{
	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_new_comments_sidebar($number) {
		$result = CommentsQModel::get_comments_new($number);
		foreach ($result as $comment) {
			//get page name
			if ($comment->page == 'book') {
				$book = BooksQModel::get_book_by_id($comment->id_page);
				$comment->page_name = $book->name;
				$comment->page_slug = $book->slug;
			} else if ($comment->page == 'character') {
				$character = CharactersQModel::get_character_by_id($comment->id_page);
				$comment->page_id   = $character->id;
				$comment->page_name = $character->name;
				$comment->page_slug = $character->slug;
			} else if ($comment->page == 'author') {
				$author = AuthorsQModel::get_author_by_id($comment->id_page);
				$comment->page_id   = $author->id;
				$comment->page_name = $author->name;
				$comment->page_slug = $author->slug;
			} else if ($comment->page == 'trans') {
				$trans = TransQModel::get_trans_by_id($comment->id_page);
				$comment->page_id   = $trans->id;
				$comment->page_name = $trans->name;
				$comment->page_slug = $trans->slug;
			} else if ($comment->page == 'user') {
				$user = UsersQModel::get_user_by_id($comment->id_page);
				$comment->page_id   = $user->id;
				$comment->page_name = $user->name;
				$comment->page_slug = $user->name_login;
			} else if ($comment->page == 'read') {
				$chap = ChapsQModel::get_chap_by_id($comment->id_page);
				$comment->chap_name  = $chap->name;
				$comment->page_name  = $chap->book_name;
				$comment->page_chap  = $chap->slug;
				$comment->page_slug  = $chap->book_slug;
				$comment->page_trans = $chap->trans_slug;
				$comment->book_id    = $chap->book_id;
			}
			//shorten comment
			if (strlen($comment->content) >= 25)
				$comment->content = substr($comment->content, 0, 25).'...';
		}

		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_new_comments_mod($number) {
		$result = CommentsQModel::get_comments_new($number);
		foreach ($result as $comment) {
			//get page name
			if ($comment->page == 'book') {
				$book = BooksQModel::get_book_by_id($comment->id_page);
				$comment->page_name = $book->name;
			} else if ($comment->page == 'character') {
				$character = CharactersQModel::get_character_by_id($comment->id_page);
				$comment->page_name = $character->name;
			} else if ($comment->page == 'author') {
				$author = AuthorsQModel::get_author_by_id($comment->id_page);
				$comment->page_name = $author->name;
			} else if ($comment->page == 'trans') {
				$trans = TransQModel::get_trans_by_id($comment->id_page);
				$comment->page_name = $trans->name;
			} else if ($comment->page == 'user') {
				$user = UsersQModel::get_user_by_id($comment->id_page);
				$comment->page_name = $user->name;
			} else if ($comment->page == 'read') {
				$chap = ChapsQModel::get_chap_by_id($comment->id_page);
				$comment->page_name = $chap->book_name;
				$comment->chap_name = $chap->name;
			}
		}

		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_new_comments_uploader($books) {
		$comments = [];
		// get comments each book
		foreach ($books as $i => $book) {
			$chaps     = ChapsQModel::get_chaps_by_book_id($book->id);
			$comments1 = CommentsQModel::get_comments_by_book_id($book->id);
			$comments[$book->id] = [];
			// push all comment in detail book
			foreach ($comments1 as $comment1) {
				array_push($comments[$book->id], $comment1);
			}
			// get comments each chap
			foreach ($chaps as $j => $chap) {
				$comments2 = CommentsQModel::get_comments_by_chap_id($chap->id);

				// push all comment in chap
				foreach ($comments2 as $comment2) {
					$comment2->chap_name = $chap->name;
					array_push($comments[$book->id], $comment2);
				}
			}
			$comments[$book->id] = collect($comments[$book->id])->sortBy('datetime')->reverse()->toArray();
		}
		return $comments;

	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_new_comments_report() {
		$result = CommentsReportQModel::get_comments_report_new();
		// dd($result);
		foreach ($result as $comment) {
			$user = UsersQModel::get_user_by_id($comment->id_user);
			$cmd = CommentsQModel::get_comment_by_id($comment->id_comment);
			$comment->user_report = $user->name;
			$comment->user_reported = $cmd->name;
			$comment->comment = $cmd->content;
			$comment->user_image = $cmd->image;
			//get page name
			if ($comment->page == 'book') {
				$book = BooksQModel::get_book_by_id($comment->id_page);
				$comment->page_name = $book->name;
			} else if ($comment->page == 'character') {
				$character = CharactersQModel::get_character_by_id($comment->id_page);
				$comment->page_name = $character->name;
			} else if ($comment->page == 'author') {
				$author = AuthorsQModel::get_author_by_id($comment->id_page);
				$comment->page_name = $author->name;
			} else if ($comment->page == 'trans') {
				$trans = TransQModel::get_trans_by_id($comment->id_page);
				$comment->page_name = $trans->name;
			} else if ($comment->page == 'user') {
				$user = UsersQModel::get_user_by_id($comment->id_page);
				$comment->page_name = $user->name;
			} else if ($comment->page == 'read') {
				$chap = ChapsQModel::get_chap_by_id($comment->id_page);
				$comment->page_name = $chap->book_name;
				$comment->chap_name = $chap->name;
			}
		}

		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_page($id, $page) {
		if ($page == 'author') {
			$result = CommentsQModel::get_comments_by_author_id($id);
			foreach ($result as $comment) {
				$reply = CommentsQModel::get_comments_author_reply_by_user_id($comment->id_user, $id);
				$comment->reply = $reply;
			}
		} else if ($page == 'book') {
			$result = CommentsQModel::get_comments_by_book_id($id);
			foreach ($result as $comment) {
				$reply = CommentsQModel::get_comments_book_reply_by_user_id($comment->id_user, $id);
				$comment->reply = $reply;
			}
		} else if ($page == 'character') {
			$result = CommentsQModel::get_comments_by_character_id($id);
			foreach ($result as $comment) {
				$reply = CommentsQModel::get_comments_character_reply_by_user_id($comment->id_user, $id);
				$comment->reply = $reply;
			}
		} else if ($page == 'user') {
			$result = CommentsQModel::get_comments_by_user_id($id);
			foreach ($result as $comment) {
				$reply = CommentsQModel::get_comments_user_reply_by_user_id($comment->id_user, $id);
				$comment->reply = $reply;
			}
		} else if ($page == 'trans') {
			$result = CommentsQModel::get_comments_by_trans_id($id);
			foreach ($result as $comment) {
				$reply = CommentsQModel::get_comments_trans_reply_by_user_id($comment->id_user, $id);
				$comment->reply = $reply;
			}
		} else if ($page == 'read') {
			$result = CommentsQModel::get_comments_by_chap_id($id);
			foreach ($result as $comment) {
				$reply = CommentsQModel::get_comments_chap_reply_by_user_id($comment->id_user, $id);
				$comment->reply = $reply;
			}
		}

		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_checkword() {
		$comments = CommentsQModel::get_comments_all();
		$checkwords = CheckwordsQModel::get_checkwords_all();
		$result = [];
		// dd($comments);
		foreach ($comments as $key => $comment) {
			// dd($comment->content);
			foreach ($checkwords as $checkword) {
				if (strpos($comment->content, $checkword->checkword) != false) {
					$comment->content = str_replace($checkword->checkword, '<strong>'.$checkword->checkword.'</strong>', $comment->content);

					if ($comment->page == 'book') {
						$book = BooksQModel::get_book_by_id($comment->id_page);
						$comment->page_name = $book->name;
					} else if ($comment->page == 'character') {
						$character = CharactersQModel::get_character_by_id($comment->id_page);
						$comment->page_name = $character->name;
					} else if ($comment->page == 'author') {
						$author = AuthorsQModel::get_author_by_id($comment->id_page);
						$comment->page_name = $author->name;
					} else if ($comment->page == 'trans') {
						$trans = TransQModel::get_trans_by_id($comment->id_page);
						$comment->page_name = $trans->name;
					} else if ($comment->page == 'user') {
						$user = UsersQModel::get_user_by_id($comment->id_page);
						$comment->page_name = $user->name;
					} else if ($comment->page == 'read') {
						$chap = ChapsQModel::get_chap_by_id($comment->id_page);
						$comment->page_name = $chap->book_name.' '.$chap->name;
					}
					$result[$key] = $comment;
				}
			}
		}
		return $result;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_save($id_user_mod) {
		$comments = CommentsSaveQModel::get_comments_save_by_user_id($id_user_mod);
		// dd($comments);
		foreach ($comments as $comment) {
			
			if ($comment->page == 'book') {
				$book = BooksQModel::get_book_by_id($comment->id_page);
				$comment->page_name = $book->name;
			} else if ($comment->page == 'character') {
				$character = CharactersQModel::get_character_by_id($comment->id_page);
				$comment->page_name = $character->name;
			} else if ($comment->page == 'author') {
				$author = AuthorsQModel::get_author_by_id($comment->id_page);
				$comment->page_name = $author->name;
			} else if ($comment->page == 'trans') {
				$trans = TransQModel::get_trans_by_id($comment->id_page);
				$comment->page_name = $trans->name;
			} else if ($comment->page == 'user') {
				$user = UsersQModel::get_user_by_id($comment->id_page);
				$comment->page_name = $user->name;
			} else if ($comment->page == 'read') {
				$chap = ChapsQModel::get_chap_by_id($comment->id_page);
				$comment->page_name = $chap->book_name.' '.$chap->name;
			}
		}
		return $comments;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_checkword_with_number_comments_have() {
		$checkwords = CheckwordsQModel::get_checkwords_all();
		foreach ($checkwords as $key => $checkword) {
			$comments = CommentsQModel::search_comments_by_keyword($checkword->checkword);
			$checkword->number = count($comments);
		}

		return $checkwords;
	}

	/**
	 * get book by id
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_comments_in_books_follow($books_follow) {
		$result = [];
		foreach ($books_follow as $key => $book) {
			$comments = CommentsQModel::get_comments_by_book_id($book->id);
			$result[$key] = new \stdClass;
			$result[$key]->id_book = $book->id;
			$result[$key]->name_book = $book->name;
			$result[$key]->comments = $comments;
		}
		
		return $result;
	}
}