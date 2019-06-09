<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\CommentsQModel;

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
		}

		return $result;
	}
}