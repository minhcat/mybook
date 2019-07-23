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

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function get_week_from_time($time) {
		$date  = date_format($time, 'd');
		$week  = 1;
		while ($date > 7) {
			$week ++;
			$date -= 7;
		}
		
		return $week;
	}

	/**
	 * Add index to array
	 * @param array
	 * @return array
	 */
	public static function get_season_from_time($time) {
		$month = date_format($time, 'm');

		if ($month == 1 || $month == 2 || $month == 3) {
			$season = 1;
		} elseif ($month == 4 || $month == 5 || $month == 6) {
			$season = 2;
		} elseif ($month == 7 || $month == 8 || $month == 9) {
			$season = 3;
		} elseif ($month == 10 || $month == 11 || $month == 12) {
			$season = 4;
		}

		return $season;
	}
}
