<?php

namespace App\Http\Models\BModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Constants;
use App\Http\Models\QModels\SystemQModel;
use App\Http\Models\CModels\SystemCModel;

class SystemBModel extends Model
{
	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function get_variables_super_admin() {
		// common system
		$website_name         = SystemQModel::get_variable_by_name('website_name');
		$slogan               = SystemQModel::get_variable_by_name('slogan');
		$logo                 = SystemQModel::get_variable_by_name('logo');
		$header_image_1       = SystemQModel::get_variable_by_name('header_image_1');
		$header_image_2       = SystemQModel::get_variable_by_name('header_image_2');
		$header_image_3       = SystemQModel::get_variable_by_name('header_image_3');
		$footer_link_name_1   = SystemQModel::get_variable_by_name('footer_link_name_1');
		$footer_link_name_2   = SystemQModel::get_variable_by_name('footer_link_name_2');
		$footer_link_name_3   = SystemQModel::get_variable_by_name('footer_link_name_3');
		$footer_link_value_1  = SystemQModel::get_variable_by_name('footer_link_value_1');
		$footer_link_value_2  = SystemQModel::get_variable_by_name('footer_link_value_2');
		$footer_link_value_3  = SystemQModel::get_variable_by_name('footer_link_value_3');
		$footer_info_1        = SystemQModel::get_variable_by_name('footer_info_1');
		$footer_info_2        = SystemQModel::get_variable_by_name('footer_info_2');
		$footer_info_3        = SystemQModel::get_variable_by_name('footer_info_3');
		$footer_last_info     = SystemQModel::get_variable_by_name('footer_last_info');
		// index system
		$slider_max_images    = SystemQModel::get_variable_by_name('slider_max_images');
		$slider_select_images = SystemQModel::get_variable_by_name('slider_select_images');
		$main_max_topic       = SystemQModel::get_variable_by_name('main_max_topic');
		$main_number_topic    = SystemQModel::get_variable_by_name('main_number_topic');
		$topic_name_1         = SystemQModel::get_variable_by_name('topic_name_1');
		$topic_name_2         = SystemQModel::get_variable_by_name('topic_name_2');
		$topic_name_3         = SystemQModel::get_variable_by_name('topic_name_3');
		$topic_name_4         = SystemQModel::get_variable_by_name('topic_name_4');
		$topic_name_5         = SystemQModel::get_variable_by_name('topic_name_5');
		$topic_name_6         = SystemQModel::get_variable_by_name('topic_name_6');
		$topic_type_1         = SystemQModel::get_variable_by_name('topic_type_1');
		$topic_type_2         = SystemQModel::get_variable_by_name('topic_type_2');
		$topic_type_3         = SystemQModel::get_variable_by_name('topic_type_3');
		$topic_type_4         = SystemQModel::get_variable_by_name('topic_type_4');
		$topic_type_5         = SystemQModel::get_variable_by_name('topic_type_5');
		$topic_type_6         = SystemQModel::get_variable_by_name('topic_type_6');
		$topic_number_1       = SystemQModel::get_variable_by_name('topic_number_1');
		$topic_number_2       = SystemQModel::get_variable_by_name('topic_number_2');
		$topic_number_3       = SystemQModel::get_variable_by_name('topic_number_3');
		$topic_number_4       = SystemQModel::get_variable_by_name('topic_number_4');
		$topic_number_5       = SystemQModel::get_variable_by_name('topic_number_5');
		$topic_number_6       = SystemQModel::get_variable_by_name('topic_number_6');
		$topic_number_max     = SystemQModel::get_variable_by_name('topic_number_max');

		// common system
		$data['website_name']         = $website_name->value;
		$data['slogan']               = $slogan->value;
		$data['logo']                 = $logo->value;
		$data['header_image_1']       = $header_image_1->value;
		$data['header_image_2']       = $header_image_2->value;
		$data['header_image_3']       = $header_image_3->value;
		$data['footer_link_name_1']   = $footer_link_name_1->value;
		$data['footer_link_name_2']   = $footer_link_name_2->value;
		$data['footer_link_name_3']   = $footer_link_name_3->value;
		$data['footer_link_value_1']  = $footer_link_value_1->value;
		$data['footer_link_value_2']  = $footer_link_value_2->value;
		$data['footer_link_value_3']  = $footer_link_value_3->value;
		$data['footer_info_1']        = $footer_info_1->value;
		$data['footer_info_2']        = $footer_info_2->value;
		$data['footer_info_3']        = $footer_info_3->value;
		$data['footer_last_info']     = $footer_last_info->value;
		// index system
		$data['slider_max_images']    = (int)$slider_max_images->value;
		$data['slider_select_images'] = (int)$slider_select_images->value;
		$data['main_max_topic']       = (int)$main_max_topic->value;
		$data['main_number_topic']    = (int)$main_number_topic->value;
		$data['topic_name_1']         = $topic_name_1->value;
		$data['topic_name_2']         = $topic_name_2->value;
		$data['topic_name_3']         = $topic_name_3->value;
		$data['topic_name_4']         = $topic_name_4->value;
		$data['topic_name_5']         = $topic_name_5->value;
		$data['topic_name_6']         = $topic_name_6->value;
		$data['topic_type_1']         = $topic_type_1->value;
		$data['topic_type_2']         = $topic_type_2->value;
		$data['topic_type_3']         = $topic_type_3->value;
		$data['topic_type_4']         = $topic_type_4->value;
		$data['topic_type_5']         = $topic_type_5->value;
		$data['topic_type_6']         = $topic_type_6->value;
		$data['topic_number_1']       = $topic_number_1->value;
		$data['topic_number_2']       = $topic_number_2->value;
		$data['topic_number_3']       = $topic_number_3->value;
		$data['topic_number_4']       = $topic_number_4->value;
		$data['topic_number_5']       = $topic_number_5->value;
		$data['topic_number_6']       = $topic_number_6->value;
		$data['topic_number_max']     = $topic_number_max->value;

		return $data;
	}
}