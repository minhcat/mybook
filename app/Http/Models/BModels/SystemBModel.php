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
		$website_name        = SystemQModel::get_variable_by_name('website_name');
		$slogan              = SystemQModel::get_variable_by_name('slogan');
		$logo                = SystemQModel::get_variable_by_name('logo');
		$header_image_1      = SystemQModel::get_variable_by_name('header_image_1');
		$header_image_2      = SystemQModel::get_variable_by_name('header_image_2');
		$header_image_3      = SystemQModel::get_variable_by_name('header_image_3');
		$footer_link_name_1  = SystemQModel::get_variable_by_name('footer_link_name_1');
		$footer_link_name_2  = SystemQModel::get_variable_by_name('footer_link_name_2');
		$footer_link_name_3  = SystemQModel::get_variable_by_name('footer_link_name_3');
		$footer_link_value_1 = SystemQModel::get_variable_by_name('footer_link_value_1');
		$footer_link_value_2 = SystemQModel::get_variable_by_name('footer_link_value_2');
		$footer_link_value_3 = SystemQModel::get_variable_by_name('footer_link_value_3');
		$footer_info_1       = SystemQModel::get_variable_by_name('footer_info_1');
		$footer_info_2       = SystemQModel::get_variable_by_name('footer_info_2');
		$footer_info_3       = SystemQModel::get_variable_by_name('footer_info_3');
		$footer_last_info    = SystemQModel::get_variable_by_name('footer_last_info');

		$data['website_name']        = $website_name->value;
		$data['slogan']              = $slogan->value;
		$data['logo']                = $logo->value;
		$data['header_image_1']      = $header_image_1->value;
		$data['header_image_2']      = $header_image_2->value;
		$data['header_image_3']      = $header_image_3->value;
		$data['footer_link_name_1']  = $footer_link_name_1->value;
		$data['footer_link_name_2']  = $footer_link_name_2->value;
		$data['footer_link_name_3']  = $footer_link_name_3->value;
		$data['footer_link_value_1'] = $footer_link_value_1->value;
		$data['footer_link_value_2'] = $footer_link_value_2->value;
		$data['footer_link_value_3'] = $footer_link_value_3->value;
		$data['footer_info_1']       = $footer_info_1->value;
		$data['footer_info_2']       = $footer_info_2->value;
		$data['footer_info_3']       = $footer_info_3->value;
		$data['footer_last_info']    = $footer_last_info->value;

		return $data;
	}
}