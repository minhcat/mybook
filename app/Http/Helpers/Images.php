<?php
namespace App\Http\Helpers;

class Images {
	/**
	 * Convert string uppercase first letter
	 * @param string
	 * @return string
	 */
	public static function upload_image($data) {
		$image = $data['image'];
		$name  = $data['name'];
		$path  = $data['path'];

		//get extension
		$file_extension = $image->getClientOriginalExtension();
		//get name
		$file_name 		= str_slug($name,'-') . '.' . $file_extension;
		//get folder
		$folder_upload	= public_path($path);
		//save file
		$image->move($folder_upload, $file_name);
	}

	/**
	 * Convert string uppercase first letter
	 * @param string
	 * @return string
	 */
	public static function upload_multi_images($data) {
		$images  = $data['images'];
		$info    = $data['info'];

		// dd($files);
		foreach ($images as $key => $image) {
			//get extension
			$file_extension = $image->getClientOriginalExtension();
			//get name
			$file_name 		= $info[$key]['name'] . '.' . $file_extension;
			//get folder
			$folder_upload	= public_path($info[$key]['path']);
			//save file
			$image->move($folder_upload, $file_name);
		}
	}

	/**
	 * Convert string uppercase first letter
	 * @param string
	 * @return string
	 */
	public static function delete_all_images_from_folder($folder) {
		$files = glob($folder.'/*.jpg');
		foreach ($files as $file) {
			if (is_file($file)) {
				unlink($file);
			}
		}
	}
}