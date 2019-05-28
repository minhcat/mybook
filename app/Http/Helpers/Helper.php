<?php
namespace App\Http\Helpers;

class Helper {
	/**
	 * Convert string uppercase first letter
	 *
	 * @param string
	 * @return string
	 */
	public static function convert_up_first_string($string) {
		return ucwords($string);
	}
}
