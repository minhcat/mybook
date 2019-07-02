<?php
namespace App\Http\Helpers;

class Images {
	/**
	 * Convert string uppercase first letter
	 * @param string
	 * @return string
	 */
	public static function upload_image($request) {
		if ($request->hasFile('image')) {
			//get extension
			$file_extension = $request->file('image')->getClientOriginalExtension();
			//get name
			$file_name 		= str_slug($request->input('name'),'-') . '.' . $file_extension;
			//get folder
			$folder_upload	= public_path('/image/books');
			//save file
			$request->file('image')->move($folder_upload, $file_name);

			return true;
		}
		return false;
	}

	/**
	 * Convert string uppercase first letter
	 * @param string
	 * @return string
	 */
	public static function upload_multi_images($data) {
		$request = $data['request'];
		$book    = $data['book'];
		$trans   = $data['trans'];
		$index   = $data['index'];

		if ($request->hasFile('images')) {
			$files = $request->file('images');
			// dd($files);
			if (is_array($files)) {
				foreach ($files as $key => $file) {
					//get extension
					$file_extension = $file->getClientOriginalExtension();
					//get name
					$file_name 		= 'img' . $key . '.' . $file_extension;
					//get folder
					$folder_upload	= public_path('/image/chaps/'.$book.'/'.$trans.'/'.$index);
					//save file
					$file->move($folder_upload, $file_name);
				}
				return true;
			}
		}
		return false;
	}
}