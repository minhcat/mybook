<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\CommentsQModel;

class CommentsBModel extends Model
{
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
}