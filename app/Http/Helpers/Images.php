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
			$file_name 		= str_slug($new_book->name,'-') . '.' . $file_extension;
			//get folder
			$folder_upload	= public_path('/image/books');
			//save file
			$request->file('image')->move($folder_upload, $file_name);

			return true;
		}
		return false;
	}
}