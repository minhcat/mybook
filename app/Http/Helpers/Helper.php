<?php
namespace App\Http\Helpers;

class Helper {
	/**
	 * Convert string uppercase first letter
	 * @param string
	 * @return string
	 */
	public static function convert_up_first_string($string) {
		return ucwords($string);
	}
	
	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_background($array, $bg_array) {
		$i = 0;
		foreach ($array as $item) {
			$i++;
			$item->index = $i;
			if ($i <= count($bg_array))
				$item->background = $bg_array[$i - 1];
			else
				$item->background = $bg_array[count($bg_array) - 1];
		}
		return $array;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function add_background_else($array, $bg, $number_index) {
		$i = $number_index;
		foreach ($array as $item) {
			$i++;
			$item->index = $i;
			$item->background = $bg;
		}
		return $array;
	}
}
