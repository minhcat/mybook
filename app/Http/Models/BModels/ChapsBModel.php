<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\CModels\ChapsCModel;
use App\Http\Models\CModels\ImagesCModel;

class ChapsBModel extends Model
{
	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function create_chap($chap) {
		//insert chap
		$data = [
			'name'		=> $chap->name,
			'title'		=> $chap->title,
			'slug'		=> str_slug($chap->name,'_'),
			'index'		=> $chap->index,
			'create_at'	=> date('Y-m-d'),
			'id_book'	=> $chap->book,
			'id_trans'	=> $chap->trans
		];
		$id_chap = ChapsCModel::insert_chap($data);

		//insert images
		foreach ($chap->images as $key => $image) {
			$extension = $image->getClientOriginalExtension();
			$data = [
				'id_chap'	=> $id_chap,
				'image'		=> 'img'. $key . '.' . $extension
			];
			ImagesCModel::insert_image($data);
		}
	}
}