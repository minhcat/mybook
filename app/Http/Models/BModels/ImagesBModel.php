<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\CModels\ChapsCModel;
use App\Http\Models\CModels\ImagesCModel;
use App\Http\Models\QModels\ImagesQModel;

class ImagesBModel extends Model
{
	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_last_index_images($chap_id) {
		//get image
		$images = ImagesQModel::get_images_by_chap_id($chap_id);

		$max = $images[0]->index;
		foreach ($images as $key => $image) {
			if ($image->index > $max) {
				$max = $image->index;
			}
		}
		return $max;
	}
}