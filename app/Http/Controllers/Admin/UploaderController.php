<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\BooksApprovedQModel;
use App\Http\Models\QModels\BooksErrorQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\CommentsQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\ChapsQModel;
use App\Http\Models\QModels\ChapsApprovedQModel;
use App\Http\Models\QModels\ChapsErrorQModel;
use App\Http\Models\QModels\TransQModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\CModels\AuthorsCModel;
use App\Http\Models\CModels\ChapsCModel;
use App\Http\Models\CModels\CharactersCModel;
use App\Http\Models\CModels\BooksApprovedCModel;
use App\Http\Models\CModels\ChapsApprovedCModel;
use App\Http\Models\CModels\TransCModel;
use App\Http\Models\BModels\AuthorsBModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\ChapsBModel;
use App\Http\Models\BModels\CharactersBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\TransBModel;
use App\Http\Models\BModels\ImagesBModel;
use App\Http\Models\BModels\UsersBModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Factory;

use Illuminate\Http\Request;

class UploaderController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function uploader() {
		$user_id = 14;
		$data['user'] 				= UsersQModel::get_user_by_id($user_id);
		$data['chaps']				= ChapsQModel::get_chaps_all();
		$data['books_upload'] 		= BooksBModel::get_books_upload($user_id);
		$data['categories']			= CategoriesQModel::get_categories_all();
		$data['characters']			= CharactersBModel::get_characters_all();
		$data['authors']			= AuthorsQModel::get_authors_all();
		$data['artists']			= AuthorsQModel::get_artists_all();
		$data['transes']			= TransBModel::get_transes_all();
		$data['books_approved']		= BooksBModel::get_books_not_approved($user_id);
		$data['chaps_approved']		= ChapsQModel::get_chaps_not_approved($user_id);
		$data['books_error']		= BooksErrorQModel::get_books_error_by_uploader_id($user_id);
		$data['chaps_error']		= ChapsErrorQModel::get_chaps_error_by_uploader_id($user_id);
		$data['authors_detail']		= AuthorsBModel::get_authors_all();
		$data['comments']			= CommentsBModel::get_new_comments_uploader($data['books_upload']);
		$data['first_book']			= $data['books_upload'][0];

		// dd($data);
		return view('pages.admin.uploader', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function create_book(Request $request) {
		$user_id = 14;
		$validate = [
			'image' 		=> 'required|image',
			'name'			=> 'required',
			'category'		=> 'required',
		];
		dd($request->all());
		$this->validate($request, $validate);

		$new_book = new \stdClass;
		$new_book->image		= $request->input('image');
		$new_book->name			= $request->input('name');
		$new_book->other_name	= $request->input('other_name');
		$new_book->categories	= json_decode($request->input('category'));
		$new_book->characters	= json_decode($request->input('character'));
		$new_book->release_at	= $request->input('release_at');
		$new_book->description	= $request->input('description');
		$new_book->keyword		= $request->input('keyword');
		$new_book->status		= $request->input('status');
		$new_book->id_author	= $request->input('author');
		$new_book->id_artist	= $request->input('artist');
		$new_book->id_uploader	= $user_id;

		// dd($new_book);
		// data image upload
		$data['image'] = $request->file('image');
		$data['name']  = $request->input('name');
		$data['path']  = '/image/books';
		Images::upload_image($data);

		BooksBModel::create_book($new_book);

		return redirect()->back()->with('success','Thêm truyện thành công');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function update_book($id_book, Request $request) {
		$user_id = 14;
		$validate = [
			'image' 		=> 'image',
			'category'		=> 'required',
		];
		// dd($request->all());
		$this->validate($request, $validate);
		
		$book = new \stdClass;
		$book->id			= $id_book;
		$book->other_name	= $request->input('other_name');
		$book->image		= $request->input('image');
		$book->categories	= json_decode($request->input('category'));
		$book->characters	= json_decode($request->input('character'));
		$book->release_at	= $request->input('release_at');
		$book->description	= $request->input('description');
		$book->status		= $request->input('status');
		$book->id_author	= $request->input('author');
		$book->id_artist	= $request->input('artist');
		$book->id_uploader	= $user_id;
		// dd($book);

		// data image upload
		$data['image'] = $request->file('image');
		$data['name']  = $request->input('name');
		$data['path']  = '/image/books';
		Images::upload_image($data);

		BooksBModel::update_book($book);

		return redirect()->back()->with('success','Cập nhật truyện thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function delete_book($id_book) {
		$data = ['deleted' => 1];
		BooksCModel::update_book($id_book, $data);
		return redirect()->back()->with('success','Xóa truyện thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function create_chap($id_book, Request $request) {
		// dd($request->all());
		// $files = $request->file('images');
		$validate = [
			'name' 	=> 'required',
			'index'	=> 'required',
		];
		$this->validate($request, $validate);

		$new_chap = new \stdClass;
		$new_chap->name		= $request->input('name');
		$new_chap->title	= $request->input('title');
		$new_chap->index	= (int)$request->input('index');
		$new_chap->book		= (int)$id_book;
		$new_chap->trans	= (int)$request->input('trans');
		$new_chap->images	= $request->file('images');
		// dd($chap);

		$id_trans = $request->input('trans');

		// dd($data_img);
		$book    = BooksQModel::get_book_by_id($id_book);
		$trans   = TransQModel::get_trans_by_id((int)$request->input('trans'));
		$index   = (int)$request->input('index');
		//check index
		$chaps = ChapsQModel::get_chaps_by_book_id_trans_id($id_book, $id_trans);
		$check_index = true;  
		foreach ($chaps as $key => $chap) {
			if ($chap->index == $index) {
				$check_index = false;
				break;
			}
		}
		if ($check_index == false) {
			return redirect()->back()->with('danger','Thứ tự chap trùng');
		}

		//upload images chap
		//data images
		$data['images'] = $request->file('images');
		$data['info'] 	= [];
		//check data
		if (!is_array($data['images']))
			return redirect()->back()->with('danger','Up ảnh thất bại');
		foreach ($data['images'] as $key => $image) {
			$data['info'][$key]['name'] = 'img'.$key;
			$data['info'][$key]['path'] = '/image/chaps/'.$book->slug.'/'.$trans->slug.'/'.$index;
		}
		Images::upload_multi_images($data);

		//insert chap into database
		ChapsBModel::create_chap($new_chap);

		return redirect()->back()->with('success','Thêm chap thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function update_chap($id_book, $id_chap, Request $request) {
		// dd($request->all());
		//check validate
		$validate = [
			'name'	=> 'required',
			'index'	=> 'required'
		];
		$this->validate($request, $validate);

		//check index
		$index = (int)$request->input('index');
		$id_trans = (int)$request->input('trans');
		$chaps = ChapsQModel::get_chaps_by_book_id_trans_id($id_book, $id_trans);
		$check_index = true;
		foreach ($chaps as $key => $chap) {
			if ($chap->id != $id_chap && $chap->index == $index) {
				$check_index = false;
				break;
			}
		}
		if ($check_index == false) {
			return redirect()->back()->with('danger','Thứ tự chap trùng');
		}

		//upload images
		$book  = BooksQModel::get_book_by_id($id_book);
		$trans = TransQModel::get_trans_by_id($id_trans);
		$images_select = $request->input('images_select');
		if ($images_select == 'add') {
			$data['images'] = $request->file('images_add');
			$data['info']   = [];
			//check data
			if (!is_array($data['images']))
				return redirect()->back()->with('danger','Up ảnh thất bại');
			$img_index = ImagesBModel::get_last_index_images($id_chap);
			foreach ($data['images'] as $key => $image) {
				$data['info'][$key]['name'] = 'img'.($img_index + $key + 1);
				$data['info'][$key]['path'] = '/image/chaps/'.$book->slug.'/'.$trans->slug.'/'.$index;
			}
		} elseif ($images_select == 'reup') {
			$data['images'] = $request->file('images_reup');
			$data['info']   = [];
			//check data
			if (!is_array($data['images']))
				return redirect()->back()->with('danger','Up ảnh thất bại');
			foreach ($data['images'] as $key => $image) {
				$data['info'][$key]['name'] = 'img'.$key;
				$data['info'][$key]['path'] = '/image/chaps/'.$book->slug.'/'.$trans->slug.'/'.$index;
			}
			Images::delete_all_images_from_folder('image/chaps/'.$book->slug.'/'.$trans->slug.'/'.$index);
		}
		Images::upload_multi_images($data);
		
		//update chap
		$update_chap = new \stdClass;
		$update_chap->id     = $id_chap;
		$update_chap->name   = $request->input('name');
		$update_chap->title  = $request->input('title');
		$update_chap->index	 = (int)$request->input('index');
		$update_chap->book   = (int)$id_book;
		$update_chap->trans	 = (int)$request->input('trans');
		$update_chap->images = $data['images'];

		ChapsBModel::update_chap($update_chap, $images_select);

		return redirect()->back()->with('success','Cập nhật chap thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function delete_chap($id_chap) {
		ChapsCModel::delete_chap($id_chap);
		return redirect()->back()->with('success','Xóa chap thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function create_author(Request $request) {
		// check validate
		$validate = [
			'name' => 'required'
		];
		$this->validate($request, $validate);

		// upload image
		$data['image'] = $request->file('image');
		$data['name']  = $request->input('name');
		$data['path']  = '/image/authors';
		if ($data['image'] != null) {
			Images::upload_image($data);
		}

		// create author
		$author = new \stdClass;
		$author->name        = $request->input('name');
		$author->gender      = $request->input('gender');
		$author->type        = $request->input('type');
		$author->categories  = json_decode($request->input('category'));
		$author->facebook    = $request->input('facebook');
		$author->twitter     = $request->input('twitter');
		$author->website     = $request->input('website');
		$author->description = $request->input('description');
		if ($data['image'] == null) {
			$author->is_image = false;
		} else {
			$author->is_image = true;
		}

		AuthorsBModel::create_author($author);

		return redirect()->back()->with('success', 'Thêm tác giả thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function update_author($id_author, Request $request) {
		// check validate
		$validate = [
			'name' => 'required'
		];
		$this->validate($request, $validate);

		// upload image
		$data['image'] = $request->file('image');
		$data['name']  = $request->input('name');
		$data['path']  = '/image/authors';
		if ($data['image'] != null) {
			Images::upload_image($data);
		}

		// create author
		$author = new \stdClass;
		$author->id          = $id_author;
		$author->name        = $request->input('name');
		$author->gender      = $request->input('gender');
		$author->type        = $request->input('type');
		$author->categories  = json_decode($request->input('category'));
		$author->facebook    = $request->input('facebook');
		$author->twitter     = $request->input('twitter');
		$author->website     = $request->input('website');
		$author->description = $request->input('description');
		if ($data['image'] == null) {
			$author->is_image = false;
		} else {
			$author->is_image = true;
		}

		AuthorsBModel::update_author($author);

		return redirect()->back()->with('success', 'Chỉnh sửa thông tin tác giả thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function delete_author($id_author) {
		$data = ['deleted' => 1];
		AuthorsCModel::update_author($id_author, $data);
		return redirect()->back()->with('success','Xóa tác giả thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function create_character(Request $request) {
		// check validate
		$validate = [
			'name' => 'required'
		];
		$this->validate($request, $validate);

		// upload image
		$data['image'] = $request->file('image');
		$data['name']  = $request->input('name');
		$data['path']  = '/image/characters';
		if ($data['image'] != null) {
			Images::upload_image($data);
		}

		// create character
		$character = new \stdClass;
		$character->name        = $request->input('name');
		$character->gender      = $request->input('gender');
		$character->type        = $request->input('type');
		$character->birthday    = $request->input('birthday');
		$character->family      = $request->input('family');
		$character->job         = $request->input('job');
		$character->description = $request->input('description');
		if ($data['image'] == null) {
			$character->is_image = false;
		} else {
			$character->is_image = true;
		}

		CharactersBModel::create_character($character);

		return redirect()->back()->with('success', 'Thêm nhân vật thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function update_character($id_character, Request $request) {
		// check validate
		$validate = [
			'name' => 'required'
		];
		$this->validate($request, $validate);

		// upload image
		$data['image'] = $request->file('image');
		$data['name']  = $request->input('name');
		$data['path']  = '/image/characters';
		if ($data['image'] != null) {
			Images::upload_image($data);
		}

		// create character
		$character = new \stdClass;
		$character->id          = $id_character;
		$character->name        = $request->input('name');
		$character->gender      = $request->input('gender');
		$character->type        = $request->input('type');
		$character->birthday    = $request->input('birthday');
		$character->family      = $request->input('family');
		$character->hobby       = $request->input('hobby');
		$character->job         = $request->input('job');
		$character->description = $request->input('description');
		if ($data['image'] == null) {
			$character->is_image = false;
		} else {
			$character->is_image = true;
		}

		CharactersBModel::update_character($character);

		return redirect()->back()->with('success', 'Chỉnh sửa thông tin nhân vật thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function delete_character($id_character) {
		$data = ['deleted' => 1];
		CharactersCModel::update_character($id_character, $data);
		return redirect()->back()->with('success','Xóa nhân vật thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function create_trans(Request $request) {
		// check validate
		$validate = [
			'name' => 'required'
		];
		$this->validate($request, $validate);

		// upload image
		$data['image'] = $request->file('image');
		$data['name']  = $request->input('name');
		$data['path']  = '/image/trans';
		if ($data['image'] != null) {
			Images::upload_image($data);
		}

		// create trans
		$trans = new \stdClass;
		$trans->name        = $request->input('name');
		$trans->leader      = $request->input('leader');
		$trans->member      = $request->input('member');
		$trans->facebook    = $request->input('facebook');
		$trans->website     = $request->input('website');
		$trans->description = $request->input('description');
		if ($data['image'] == null) {
			$trans->is_image = false;
		} else {
			$trans->is_image = true;
		}

		TransBModel::create_trans($trans);

		return redirect()->back()->with('success', 'Thêm nhóm dịch thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function update_trans($id_trans, Request $request) {
		// check validate
		$validate = [
			'name' => 'required'
		];
		$this->validate($request, $validate);

		// upload image
		$data['image'] = $request->file('image');
		$data['name']  = $request->input('name');
		$data['path']  = '/image/trans';
		if ($data['image'] != null) {
			Images::upload_image($data);
		}

		// create trans
		$trans = new \stdClass;
		$trans->id          = $id_trans;
		$trans->name        = $request->input('name');
		$trans->leader      = $request->input('leader');
		$trans->member      = $request->input('member');
		$trans->facebook    = $request->input('facebook');
		$trans->website     = $request->input('website');
		$trans->description = $request->input('description');
		if ($data['image'] == null) {
			$trans->is_image = false;
		} else {
			$trans->is_image = true;
		}

		TransBModel::update_trans($trans);

		return redirect()->back()->with('success', 'Chỉnh sửa thông tin nhóm dịch thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public function delete_trans($id_trans) {
		$data = ['deleted' => 1];
		TransCModel::update_trans($id_trans, $data);
		return redirect()->back()->with('success','Xóa nhóm dịch thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function add_keyword($id_book, Request $request) {
		$keyword = $request->input('keyword');
		$book = BooksQModel::get_book_by_id($id_book);

		$data = ['keyword' => $book->keyword.', '.$keyword];
		BooksCModel::update_book($id_book, $data);

		return redirect()->back()->with('success','Thêm từ khóa thành công');
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function call_admin_approved_book($id_book) {
		$book_approved = BooksApprovedQModel::get_book_approved_by_book_id($id_book);
		$data = [
			'call' => $book_approved->call + 1,
		];
		BooksApprovedCModel::update_book_approved($book_approved->id, $data);
	}

	/**
	 * get random books in sidebar
	 * @param 
	 * @return object|boolean : all properties from `books` table
	 */
	public static function call_admin_approved_chap($id_chap) {
		$chap_approved = ChapsApprovedQModel::get_chap_approved_by_chap_id($id_chap);
		$data = [
			'call' => $chap_approved->call + 1,
		];
		ChapsApprovedCModel::update_chap_approved($chap_approved->id, $data);
	}
}