<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\BooksQModel;

class BooksBModel extends Model
{
	public static function get_books_random_sidebar($number) {
		$result = BooksQModel::get_books_random(6);
		foreach ($result as $key => $book) {
			if (strlen($book->name) >= 22)
				$book->name = substr($book->name, 0, 20).'...';
			$book->description = substr($book->description, 0, 45).'...';
		}

		return $result;
	}
}