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
		$sidebar_max_box      = SystemQModel::get_variable_by_name('sidebar_max_box');
		$sidebar_number_box   = SystemQModel::get_variable_by_name('sidebar_number_box');
		$sidebar_box_type_1   = SystemQModel::get_variable_by_name('sidebar_box_type_1');
		$sidebar_box_type_2   = SystemQModel::get_variable_by_name('sidebar_box_type_2');
		$sidebar_box_type_3   = SystemQModel::get_variable_by_name('sidebar_box_type_3');
		$sidebar_box_type_4   = SystemQModel::get_variable_by_name('sidebar_box_type_4');
		$sidebar_box_type_5   = SystemQModel::get_variable_by_name('sidebar_box_type_5');
		$sidebar_box_type_6   = SystemQModel::get_variable_by_name('sidebar_box_type_6');
		$sidebar_box_number_1 = SystemQModel::get_variable_by_name('sidebar_box_number_1');
		$sidebar_box_number_2 = SystemQModel::get_variable_by_name('sidebar_box_number_2');
		$sidebar_box_number_3 = SystemQModel::get_variable_by_name('sidebar_box_number_3');
		$sidebar_box_number_4 = SystemQModel::get_variable_by_name('sidebar_box_number_4');
		$sidebar_box_number_5 = SystemQModel::get_variable_by_name('sidebar_box_number_5');
		$sidebar_box_number_6 = SystemQModel::get_variable_by_name('sidebar_box_number_6');
		$sidebar_number_min   = SystemQModel::get_variable_by_name('sidebar_number_min');
		$sidebar_number_max   = SystemQModel::get_variable_by_name('sidebar_number_max');
		$list_1               = SystemQModel::get_variable_by_name('list_1');
		$list_title_1         = SystemQModel::get_variable_by_name('list_title_1');
		$list_info_1          = SystemQModel::get_variable_by_name('list_info_1');
		$list_type_1          = SystemQModel::get_variable_by_name('list_type_1');
		$list_number_1        = SystemQModel::get_variable_by_name('list_number_1');
		$list_sidebar         = SystemQModel::get_variable_by_name('list_sidebar');
		$list_box_type_1      = SystemQModel::get_variable_by_name('list_box_type_1');
		$list_box_type_2      = SystemQModel::get_variable_by_name('list_box_type_2');
		$list_box_type_3      = SystemQModel::get_variable_by_name('list_box_type_3');
		$list_box_type_4      = SystemQModel::get_variable_by_name('list_box_type_4');
		$list_box_type_5      = SystemQModel::get_variable_by_name('list_box_type_5');
		$list_box_type_6      = SystemQModel::get_variable_by_name('list_box_type_6');
		$list_box_number_1    = SystemQModel::get_variable_by_name('list_box_number_1');
		$list_box_number_2    = SystemQModel::get_variable_by_name('list_box_number_2');
		$list_box_number_3    = SystemQModel::get_variable_by_name('list_box_number_3');
		$list_box_number_4    = SystemQModel::get_variable_by_name('list_box_number_4');
		$list_box_number_5    = SystemQModel::get_variable_by_name('list_box_number_5');
		$list_box_number_6    = SystemQModel::get_variable_by_name('list_box_number_6');

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
		$data['sidebar_max_box']      = (int)$sidebar_max_box->value;
		$data['sidebar_number_box']   = (int)$sidebar_number_box->value;
		$data['sidebar_box_type_1']   = $sidebar_box_type_1->value;
		$data['sidebar_box_type_2']   = $sidebar_box_type_2->value;
		$data['sidebar_box_type_3']   = $sidebar_box_type_3->value;
		$data['sidebar_box_type_4']   = $sidebar_box_type_4->value;
		$data['sidebar_box_type_5']   = $sidebar_box_type_5->value;
		$data['sidebar_box_type_6']   = $sidebar_box_type_6->value;
		$data['sidebar_box_number_1'] = (int)$sidebar_box_number_1->value;
		$data['sidebar_box_number_2'] = (int)$sidebar_box_number_2->value;
		$data['sidebar_box_number_3'] = (int)$sidebar_box_number_3->value;
		$data['sidebar_box_number_4'] = (int)$sidebar_box_number_4->value;
		$data['sidebar_box_number_5'] = (int)$sidebar_box_number_5->value;
		$data['sidebar_box_number_6'] = (int)$sidebar_box_number_6->value;
		$data['sidebar_number_min']   = (int)$sidebar_number_min->value;
		$data['sidebar_number_max']   = (int)$sidebar_number_max->value;
		$data['list_1']               = $list_1->value;
		$data['list_title_1']         = $list_title_1->value;
		$data['list_info_1']          = $list_info_1->value;
		$data['list_number_1']        = $list_number_1->value;
		$data['list_sidebar']         = $list_sidebar->value;
		$data['list_box_type_1']      = $list_box_type_1->value;
		$data['list_box_type_2']      = $list_box_type_2->value;
		$data['list_box_type_3']      = $list_box_type_3->value;
		$data['list_box_type_4']      = $list_box_type_4->value;
		$data['list_box_type_5']      = $list_box_type_5->value;
		$data['list_box_type_6']      = $list_box_type_6->value;
		$data['list_box_number_1']    = $list_box_number_1->value;
		$data['list_box_number_2']    = $list_box_number_2->value;
		$data['list_box_number_3']    = $list_box_number_3->value;
		$data['list_box_number_4']    = $list_box_number_4->value;
		$data['list_box_number_5']    = $list_box_number_5->value;
		$data['list_box_number_6']    = $list_box_number_6->value;

		return $data;
	}
}