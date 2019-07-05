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
				'image'		=> 'img'. $key . '.' . $extension,
				'index'		=> $key
			];
			ImagesCModel::insert_image($data);
		}
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function update_chap($chap, $type) {
		// update chap
		$id   = $chap->id;
		$data = [
			'name'		=> $chap->name,
			'title'		=> $chap->title,
			'slug'		=> str_slug($chap->name,'_'),
			'index'		=> $chap->index,
			'id_book'	=> $chap->book,
			'id_trans'	=> $chap->trans
		];
		ChapsCModel::update_chap($id, $data);

		// update images
		if ($type == 'add') {
			$img_index = ImagesBModel::get_last_index_images($chap->id);
			foreach ($chap->images as $key => $image) {
				$data = [
					'id_chap' => $chap->id,
					'image'   => 'img'.($img_index + $key + 1).'.jpg',
					'index'   => $img_index + $key + 1
				];
				ImagesCModel::insert_image($data);
			}
		} elseif ($type == 'reup') {
			ImagesCModel::delete_images_by_chap_id($chap->id);
			foreach ($chap->images as $key => $image) {
				$data = [
					'id_chap' => $chap->id,
					'image'   => 'img'.$key.'.jpg',
					'index'	  => $key
				];
				ImagesCModel::insert_image($data);
			}
		}
	}
}