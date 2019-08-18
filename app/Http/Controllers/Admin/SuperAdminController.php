<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\AuthorsQModel;
use App\Http\Models\QModels\BooksQModel;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersPunishQModel;
use App\Http\Models\QModels\UsersBanQModel;
use App\Http\Models\QModels\CategoriesQModel;
use App\Http\Models\QModels\CharactersQModel;
use App\Http\Models\QModels\SlidersQModel;
use App\Http\Models\QModels\SystemQModel;
use App\Http\Models\CModels\BooksCModel;
use App\Http\Models\CModels\UsersCModel;
use App\Http\Models\CModels\ChapsCModel;
use App\Http\Models\CModels\SlidersCModel;
use App\Http\Models\CModels\SystemCModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\TransBModel;
use App\Http\Models\BModels\CommentsBModel;
use App\Http\Models\BModels\UsersBModel;
use App\Http\Models\BModels\AuthorsBModel;
use App\Http\Models\BModels\SystemBModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Factory;

use Illuminate\Http\Request;

class SuperAdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function super_admin() {
		$user_id = 16;
		$data['user']			= UsersQModel::get_user_by_id($user_id);
		$data['books_upload']	= BooksBModel::get_books_upload($user_id);
		$data['categories']		= CategoriesQModel::get_categories_all();
		$data['characters']		= CharactersQModel::get_characters_all();
		$data['transes']		= TransBModel::get_transes_all();
		$data['authors']		= AuthorsQModel::get_authors_all();
		$data['artists']		= AuthorsQModel::get_artists_all();
		$data['authors_detail']	= AuthorsBModel::get_authors_all();
		$data['books']			= BooksBModel::get_all_books();
		$data['books_delete']   = BooksBModel::get_all_books_delete();
		$data['admins']			= UsersQModel::get_users_all();
		$data['system']			= SystemBModel::get_variables_super_admin();
		$data['sliders']		= SlidersQModel::get_sliders_all();

		$data['system']['list-type-topic'] = [
			'topic-view',
			'topic-update',
			'topic-comment',
			'topic-rate'
		];
		$data['system']['list-type-sidebar'] = [
			'top-view',
			'random-book',
			'new-comment',
			'facebook',
			'advertisement'
		];
		$data['system']['list-list-book'] = [
			'truyện lượt xem nhiều',
			'truyện theo thể loại',
			'truyện bình luận nhiều',
			'truyện đánh giá cao',
			'truyện đã hoàn thành',
			'truyện đang tiến hành',
			'truyện mới cập nhật',
			'truyện theo năm',
			'truyện đang theo dõi',
			'tìm kiếm truyện',
			'danh sách bạn',
			'thông báo',
			'lịch sử đọc truyện'
		];
		$data['system']['list-type-list'] = [
			'list-view',
			'list-category',
			'list-comment',
			'list-rate',
			'list-completed',
			'list-process',
			'list-update',
			'list-year',
			'list-follow',
			'list-search',
			'list-friend',
			'list-notification',
			'list-history'
		];
		// dd($data);
		return view('pages.admin.super-admin', $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function delete_book_temporary($id_book) {
		$data = ['deleted' => 1];
		BooksCModel::update_book($id_book, $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function delete_book_permanent($id_book) {
		ChapsCModel::delete_chap_by_book_id($id_book);
		BooksCModel::delete_book($id_book);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function restore_book($id_book) {
		$data = ['deleted' => 0];
		BooksCModel::update_book($id_book, $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function permiss_admin($id_admin, $access) {
		$data = ['admin' => $access];
		UsersCModel::update_user($id_admin, $data);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function edit_system_common(Request $request) {
		// website name
		$id_webiste_name = SystemQModel::get_variable_by_name('website_name')->id;
		$website_name    = $request->input('website_name');
		$data = ['value' => $website_name];
		SystemCModel::update_variable($id_webiste_name, $data);

		// slogan
		$id_slogan = SystemQModel::get_variable_by_name('slogan')->id;
		$slogan    = $request->input('slogan');
		$data = ['value' => $slogan];
		SystemCModel::update_variable($id_slogan, $data);

		// logo
		// upload image
		$logo['image'] = $request->file('logo');
		$logo['name']  = 'logo2';
		$logo['path']  = '/image/system';
		Images::upload_image($logo);
		// update database
		$id_logo = SystemQModel::get_variable_by_name('logo')->id;
		$logo    = 'logo2.jpg';
		$data = ['value' => $logo];
		SystemCModel::update_variable($id_logo, $data);

		// header image
		// upload image
		$image['images'] = $request->file('image');
		$image['info']   = [];
		if (!is_array($image['images']))
			return redirect()->back()->with('danger','Up ảnh thất bại');
		foreach ($image['images'] as $key => $img) {
			if ($key < 3) {
				$image['info'][$key]['name'] = 'xheader'.($key+1);
				$image['info'][$key]['path'] = '/image/system';
			}
		}
		Images::upload_multi_images($image);
		// update database
		// image 1
		$id_header_image_1 = SystemQModel::get_variable_by_name('header_image_1')->id;
		$header_image_1    = 'xheader1.jpg';
		$data = ['value' => $header_image_1];
		SystemCModel::update_variable($id_header_image_1, $data);
		// image 2
		$id_header_image_2 = SystemQModel::get_variable_by_name('header_image_2')->id;
		$header_image_2    = 'xheader2.jpg';
		$data = ['value' => $header_image_2];
		SystemCModel::update_variable($id_header_image_2, $data);
		// image 1
		$id_header_image_3 = SystemQModel::get_variable_by_name('header_image_3')->id;
		$header_image_3    = 'xheader3.jpg';
		$data = ['value' => $header_image_3];
		SystemCModel::update_variable($id_header_image_3, $data);

		// footer link name 1
		$id_footer_link_name_1 = SystemQModel::get_variable_by_name('footer_link_name_1')->id;
		$footer_link_name_1    = $request->input('footer_link_name_1');
		$data = ['value' => $footer_link_name_1];
		SystemCModel::update_variable($id_footer_link_name_1, $data);

		// footer link name 2
		$id_footer_link_name_2 = SystemQModel::get_variable_by_name('footer_link_name_2')->id;
		$footer_link_name_2    = $request->input('footer_link_name_2');
		$data = ['value' => $footer_link_name_2];
		SystemCModel::update_variable($id_footer_link_name_2, $data);

		// footer link name 3
		$id_footer_link_name_3 = SystemQModel::get_variable_by_name('footer_link_name_3')->id;
		$footer_link_name_3    = $request->input('footer_link_name_3');
		$data = ['value' => $footer_link_name_3];
		SystemCModel::update_variable($id_footer_link_name_3, $data);

		// footer link value 1
		$id_footer_link_value_1 = SystemQModel::get_variable_by_name('footer_link_value_1')->id;
		$footer_link_value_1    = $request->input('footer_link_value_1');
		$data = ['value' => $footer_link_value_1];
		SystemCModel::update_variable($id_footer_link_value_1, $data);

		// footer link value 2
		$id_footer_link_value_2 = SystemQModel::get_variable_by_name('footer_link_value_2')->id;
		$footer_link_value_2    = $request->input('footer_link_value_2');
		$data = ['value' => $footer_link_value_2];
		SystemCModel::update_variable($id_footer_link_value_2, $data);

		// footer link value 3
		$id_footer_link_value_3 = SystemQModel::get_variable_by_name('footer_link_value_3')->id;
		$footer_link_value_3    = $request->input('footer_link_value_3');
		$data = ['value' => $footer_link_value_3];
		SystemCModel::update_variable($id_footer_link_value_3, $data);

		// footer info 1
		$id_footer_info_1 = SystemQModel::get_variable_by_name('footer_info_1')->id;
		$footer_info_1    = $request->input('footer_info_1');
		$data = ['value' => $footer_info_1];
		SystemCModel::update_variable($id_footer_info_1, $data);

		// footer info 2
		$id_footer_info_2 = SystemQModel::get_variable_by_name('footer_info_2')->id;
		$footer_info_2    = $request->input('footer_info_2');
		$data = ['value' => $footer_info_2];
		SystemCModel::update_variable($id_footer_info_2, $data);

		// footer info 3
		$id_footer_info_3 = SystemQModel::get_variable_by_name('footer_info_3')->id;
		$footer_info_3    = $request->input('footer_info_3');
		$data = ['value' => $footer_info_3];
		SystemCModel::update_variable($id_footer_info_3, $data);

		// footer last info
		$id_footer_last_info = SystemQModel::get_variable_by_name('footer_last_info')->id;
		$footer_last_info    = $request->input('footer_last_info');
		$data = ['value' => $footer_last_info];
		SystemCModel::update_variable($id_footer_last_info, $data);

		return redirect()->back()->with('success', 'Thay đổi giá trị hệ thống thành công');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function edit_system_index(Request $request) {
		// dd($request->all());
		// sidebar number box
		$id_sidebar_number_box = SystemQModel::get_variable_by_name('sidebar_number_box')->id;
		$sidebar_number_box    = $request->input('sidebar_number_box');
		$data = ['value' => $sidebar_number_box];
		SystemCModel::update_variable($id_sidebar_number_box, $data);

		// slider
		if ($request->file('slider') != null) {
			// upload image
			// get index
			$slider_max_images = SystemQModel::get_variable_by_name('slider_max_images');
			$index = (int)$slider_max_images->value;
			$index++;
			if ($index < 10) $strindex = '0'.$index;
			else $strindex = ''.$index;
			$slider['image'] = $request->file('slider');
			$slider['name']  = 'slider'.$strindex;
			$slider['path']  = '/image/sliders';
			Images::upload_image($slider);
			// update database
			$data = ['name' => $slider['name'], 'index' => $index, 'date' => date('Y-m-d')];
			SlidersCModel::insert_slider($data);
			SystemCModel::update_variable($slider_max_images->id, ['value' => $index]);
		}

		// main number topic
		$id_main_number_topic = SystemQModel::get_variable_by_name('main_number_topic')->id;
		$main_number_topic    = $request->input('main_number_topic');
		$data = ['value' => $main_number_topic];
		SystemCModel::update_variable($id_main_number_topic, $data);

		// topic name 1
		$id_topic_name_1 = SystemQModel::get_variable_by_name('topic_name_1')->id;
		$topic_name_1    = $request->input('topic_name_1');
		$data = ['value' => $topic_name_1];
		SystemCModel::update_variable($id_topic_name_1, $data);

		// topic name 2
		$id_topic_name_2 = SystemQModel::get_variable_by_name('topic_name_2')->id;
		$topic_name_2    = $request->input('topic_name_2');
		$data = ['value' => $topic_name_2];
		SystemCModel::update_variable($id_topic_name_2, $data);

		// topic name 3
		$id_topic_name_3 = SystemQModel::get_variable_by_name('topic_name_3')->id;
		$topic_name_3    = $request->input('topic_name_3');
		$data = ['value' => $topic_name_3];
		SystemCModel::update_variable($id_topic_name_3, $data);

		// topic name 4
		$id_topic_name_4 = SystemQModel::get_variable_by_name('topic_name_4')->id;
		$topic_name_4    = $request->input('topic_name_4');
		$data = ['value' => $topic_name_4];
		SystemCModel::update_variable($id_topic_name_4, $data);

		// topic name 5
		$id_topic_name_5 = SystemQModel::get_variable_by_name('topic_name_5')->id;
		$topic_name_5    = $request->input('topic_name_5');
		$data = ['value' => $topic_name_5];
		SystemCModel::update_variable($id_topic_name_5, $data);

		// topic name 6
		$id_topic_name_6 = SystemQModel::get_variable_by_name('topic_name_6')->id;
		$topic_name_6    = $request->input('topic_name_6');
		$data = ['value' => $topic_name_6];
		SystemCModel::update_variable($id_topic_name_6, $data);

		// topic type 1
		$id_topic_type_1 = SystemQModel::get_variable_by_name('topic_type_1')->id;
		$topic_type_1    = $request->input('topic_type_1');
		$data = ['value' => $topic_type_1];
		SystemCModel::update_variable($id_topic_type_1, $data);

		// topic type 2
		$id_topic_type_2 = SystemQModel::get_variable_by_name('topic_type_2')->id;
		$topic_type_2    = $request->input('topic_type_2');
		$data = ['value' => $topic_type_2];
		SystemCModel::update_variable($id_topic_type_2, $data);

		// topic type 3
		$id_topic_type_3 = SystemQModel::get_variable_by_name('topic_type_3')->id;
		$topic_type_3    = $request->input('topic_type_3');
		$data = ['value' => $topic_type_3];
		SystemCModel::update_variable($id_topic_type_3, $data);

		// topic type 4
		$id_topic_type_4 = SystemQModel::get_variable_by_name('topic_type_4')->id;
		$topic_type_4    = $request->input('topic_type_4');
		$data = ['value' => $topic_type_4];
		SystemCModel::update_variable($id_topic_type_4, $data);

		// topic type 5
		$id_topic_type_5 = SystemQModel::get_variable_by_name('topic_type_5')->id;
		$topic_type_5    = $request->input('topic_type_5');
		$data = ['value' => $topic_type_5];
		SystemCModel::update_variable($id_topic_type_5, $data);

		// topic type 6
		$id_topic_type_6 = SystemQModel::get_variable_by_name('topic_type_6')->id;
		$topic_type_6    = $request->input('topic_type_6');
		$data = ['value' => $topic_type_6];
		SystemCModel::update_variable($id_topic_type_6, $data);

		// topic number 1
		$id_topic_number_1 = SystemQModel::get_variable_by_name('topic_number_1')->id;
		$topic_number_1    = $request->input('topic_number_1');
		$data = ['value' => $topic_number_1];
		SystemCModel::update_variable($id_topic_number_1, $data);

		// topic number 2
		$id_topic_number_2 = SystemQModel::get_variable_by_name('topic_number_2')->id;
		$topic_number_2    = $request->input('topic_number_2');
		$data = ['value' => $topic_number_2];
		SystemCModel::update_variable($id_topic_number_2, $data);

		// topic number 3
		$id_topic_number_3 = SystemQModel::get_variable_by_name('topic_number_3')->id;
		$topic_number_3    = $request->input('topic_number_3');
		$data = ['value' => $topic_number_3];
		SystemCModel::update_variable($id_topic_number_3, $data);

		// topic number 4
		$id_topic_number_4 = SystemQModel::get_variable_by_name('topic_number_4')->id;
		$topic_number_4    = $request->input('topic_number_4');
		$data = ['value' => $topic_number_4];
		SystemCModel::update_variable($id_topic_number_4, $data);

		// topic number 5
		$id_topic_number_5 = SystemQModel::get_variable_by_name('topic_number_5')->id;
		$topic_number_5    = $request->input('topic_number_5');
		$data = ['value' => $topic_number_5];
		SystemCModel::update_variable($id_topic_number_5, $data);

		// topic number 6
		$id_topic_number_6 = SystemQModel::get_variable_by_name('topic_number_6')->id;
		$topic_number_6    = $request->input('topic_number_6');
		$data = ['value' => $topic_number_6];
		SystemCModel::update_variable($id_topic_number_6, $data);

		// sidebar number box
		$id_sidebar_number_box = SystemQModel::get_variable_by_name('sidebar_number_box')->id;
		$sidebar_number_box    = $request->input('sidebar_number_box');
		$data = ['value' => $sidebar_number_box];
		SystemCModel::update_variable($id_sidebar_number_box, $data);

		// sidebar box type 1
		$id_sidebar_box_type_1 = SystemQModel::get_variable_by_name('sidebar_box_type_1')->id;
		$sidebar_box_type_1    = $request->input('sidebar_box_type_1');
		if ($sidebar_box_type_1 != null) {
			$data = ['value' => $sidebar_box_type_1];
			SystemCModel::update_variable($id_sidebar_box_type_1, $data);
		}

		// sidebar box type 2
		$id_sidebar_box_type_2 = SystemQModel::get_variable_by_name('sidebar_box_type_2')->id;
		$sidebar_box_type_2    = $request->input('sidebar_box_type_2');
		if ($sidebar_box_type_2 != null) {
			$data = ['value' => $sidebar_box_type_2];
			SystemCModel::update_variable($id_sidebar_box_type_2, $data);
		}

		// sidebar box type 3
		$id_sidebar_box_type_3 = SystemQModel::get_variable_by_name('sidebar_box_type_3')->id;
		$sidebar_box_type_3    = $request->input('sidebar_box_type_3');
		if ($sidebar_box_type_3 != null) {
			$data = ['value' => $sidebar_box_type_3];
			SystemCModel::update_variable($id_sidebar_box_type_3, $data);
		}

		// sidebar box type 4
		$id_sidebar_box_type_4 = SystemQModel::get_variable_by_name('sidebar_box_type_4')->id;
		$sidebar_box_type_4    = $request->input('sidebar_box_type_4');
		if ($sidebar_box_type_4 != null) {
			$data = ['value' => $sidebar_box_type_4];
			SystemCModel::update_variable($id_sidebar_box_type_4, $data);
		}

		// sidebar type 5
		$id_sidebar_box_type_5 = SystemQModel::get_variable_by_name('sidebar_box_type_5')->id;
		$sidebar_box_type_5    = $request->input('sidebar_box_type_5');
		if ($sidebar_box_type_5 != null) {
			$data = ['value' => $sidebar_box_type_5];
			SystemCModel::update_variable($id_sidebar_box_type_5, $data);
		}

		// sidebar box type 6
		$id_sidebar_box_type_6 = SystemQModel::get_variable_by_name('sidebar_box_type_6')->id;
		$sidebar_box_type_6    = $request->input('sidebar_box_type_6');
		$data = ['value' => $sidebar_box_type_6];
		SystemCModel::update_variable($id_sidebar_box_type_6, $data);

		// sidebar box number 1
		$id_sidebar_box_number_1 = SystemQModel::get_variable_by_name('sidebar_box_number_1')->id;
		$sidebar_box_number_1    = $request->input('sidebar_box_number_1');
		if ($sidebar_box_number_1 != null) {
			$data = ['value' => $sidebar_box_number_1];
			SystemCModel::update_variable($id_sidebar_box_number_1, $data);
		}

		// sidebar box number 2
		$id_sidebar_box_number_2 = SystemQModel::get_variable_by_name('sidebar_box_number_2')->id;
		$sidebar_box_number_2    = $request->input('sidebar_box_number_2');
		if ($sidebar_box_number_2 != null) {
			$data = ['value' => $sidebar_box_number_2];
			SystemCModel::update_variable($id_sidebar_box_number_2, $data);
		}

		// sidebar box number 3
		$id_sidebar_box_number_3 = SystemQModel::get_variable_by_name('sidebar_box_number_3')->id;
		$sidebar_box_number_3    = $request->input('sidebar_box_number_3');
		if ($sidebar_box_number_3 != null) {
			$data = ['value' => $sidebar_box_number_3];
			SystemCModel::update_variable($id_sidebar_box_number_3, $data);
		}

		// sidebar box number 4
		$id_sidebar_box_number_4 = SystemQModel::get_variable_by_name('sidebar_box_number_4')->id;
		$sidebar_box_number_4    = $request->input('sidebar_box_number_4');
		if ($sidebar_box_number_4 != null) {
			$data = ['value' => $sidebar_box_number_4];
			SystemCModel::update_variable($id_sidebar_box_number_4, $data);
		}

		// sidebar box number 5
		$id_sidebar_box_number_5 = SystemQModel::get_variable_by_name('sidebar_box_number_5')->id;
		$sidebar_box_number_5    = $request->input('sidebar_box_number_5');
		if ($sidebar_box_number_5 != null) {
			$data = ['value' => $sidebar_box_number_5];
			SystemCModel::update_variable($id_sidebar_box_number_5, $data);
		}

		// sidebar box number 6
		$id_sidebar_box_number_6 = SystemQModel::get_variable_by_name('sidebar_box_number_6')->id;
		$sidebar_box_number_6    = $request->input('sidebar_box_number_6');
		if ($sidebar_box_number_6 != null) {
			$data = ['value' => $sidebar_box_number_6];
			SystemCModel::update_variable($id_sidebar_box_number_6, $data);
		}

		return redirect()->back()->with('success', 'Thay đổi giá trị hệ thống thành công');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function edit_system_list(Request $request) {
		// dd($request->all());
		// get index list
		$index = $request->input('list');

		if ($index == '1') {
			// list title 1
			$id_list_title_1 = SystemQModel::get_variable_by_name('list_title_1')->id;
			$list_title_1    = $request->input('list_title');
			$data = ['value' => $list_title_1];
			SystemCModel::update_variable($id_list_title_1, $data);

			// list info 1
			$id_list_info_1 = SystemQModel::get_variable_by_name('list_info_1')->id;
			$list_info_1    = $request->input('list_info');
			$data = ['value' => $list_info_1];
			SystemCModel::update_variable($id_list_info_1, $data);

			// list type 1
			$id_list_type_1 = SystemQModel::get_variable_by_name('list_type_1')->id;
			$list_type_1    = $request->input('list_type');
			$data = ['value' => $list_type_1];
			SystemCModel::update_variable($id_list_type_1, $data);

			// list number 1
			$id_list_number_1 = SystemQModel::get_variable_by_name('list_number_1')->id;
			$list_number_1    = $request->input('list_number');
			$data = ['value' => $list_number_1];
			SystemCModel::update_variable($id_list_number_1, $data);

		} else if ($index == '2') {
			// list title 2
			$id_list_title_2 = SystemQModel::get_variable_by_name('list_title_2')->id;
			$list_title_2    = $request->input('list_title');
			$data = ['value' => $list_title_2];
			SystemCModel::update_variable($id_list_title_2, $data);

			// list info 2
			$id_list_info_2 = SystemQModel::get_variable_by_name('list_info_2')->id;
			$list_info_2    = $request->input('list_info');
			$data = ['value' => $list_info_2];
			SystemCModel::update_variable($id_list_info_2, $data);

			// list type 2
			$id_list_type_2 = SystemQModel::get_variable_by_name('list_type_2')->id;
			$list_type_2    = $request->input('list_type');
			$data = ['value' => $list_type_2];
			SystemCModel::update_variable($id_list_type_2, $data);

			// list number 2
			$id_list_number_2 = SystemQModel::get_variable_by_name('list_number_2')->id;
			$list_number_2    = $request->input('list_number');
			$data = ['value' => $list_number_2];
			SystemCModel::update_variable($id_list_number_2, $data);

		} else if ($index == '3') {
			// list title 3
			$id_list_title_3 = SystemQModel::get_variable_by_name('list_title_3')->id;
			$list_title_3    = $request->input('list_title');
			$data = ['value' => $list_title_3];
			SystemCModel::update_variable($id_list_title_3, $data);

			// list info 3
			$id_list_info_3 = SystemQModel::get_variable_by_name('list_info_3')->id;
			$list_info_3    = $request->input('list_info');
			$data = ['value' => $list_info_3];
			SystemCModel::update_variable($id_list_info_3, $data);

			// list type 3
			$id_list_type_3 = SystemQModel::get_variable_by_name('list_type_3')->id;
			$list_type_3    = $request->input('list_type');
			$data = ['value' => $list_type_3];
			SystemCModel::update_variable($id_list_type_3, $data);

			// list number 3
			$id_list_number_3 = SystemQModel::get_variable_by_name('list_number_3')->id;
			$list_number_3    = $request->input('list_number');
			$data = ['value' => $list_number_3];
			SystemCModel::update_variable($id_list_number_3, $data);

		} else if ($index == '4') {
			// list title 4
			$id_list_title_4 = SystemQModel::get_variable_by_name('list_title_4')->id;
			$list_title_4    = $request->input('list_title');
			$data = ['value' => $list_title_4];
			SystemCModel::update_variable($id_list_title_4, $data);

			// list info 4
			$id_list_info_4 = SystemQModel::get_variable_by_name('list_info_4')->id;
			$list_info_4    = $request->input('list_info');
			$data = ['value' => $list_info_4];
			SystemCModel::update_variable($id_list_info_4, $data);

			// list type 4
			$id_list_type_4 = SystemQModel::get_variable_by_name('list_type_4')->id;
			$list_type_4    = $request->input('list_type');
			$data = ['value' => $list_type_4];
			SystemCModel::update_variable($id_list_type_4, $data);

			// list number 4
			$id_list_number_4 = SystemQModel::get_variable_by_name('list_number_4')->id;
			$list_number_4    = $request->input('list_number');
			$data = ['value' => $list_number_4];
			SystemCModel::update_variable($id_list_number_4, $data);

		}

		// sidebar number box
		$id_list_sidebar = SystemQModel::get_variable_by_name('list_sidebar')->id;
		$list_sidebar    = $request->input('list_sidebar');
		$data = ['value' => $list_sidebar];
		SystemCModel::update_variable($id_list_sidebar, $data);

		// sidebar box type 1
		$id_list_box_type_1 = SystemQModel::get_variable_by_name('list_box_type_1')->id;
		$list_box_type_1    = $request->input('list_box_type_1');
		if ($list_box_type_1 != null) {
			$data = ['value' => $list_box_type_1];
			SystemCModel::update_variable($id_list_box_type_1, $data);
		}

		// sidebar box type 2
		$id_list_box_type_2 = SystemQModel::get_variable_by_name('list_box_type_2')->id;
		$list_box_type_2    = $request->input('list_box_type_2');
		if ($list_box_type_2 != null) {
			$data = ['value' => $list_box_type_2];
			SystemCModel::update_variable($id_list_box_type_2, $data);
		}

		// sidebar box type 3
		$id_list_box_type_3 = SystemQModel::get_variable_by_name('list_box_type_3')->id;
		$list_box_type_3    = $request->input('list_box_type_3');
		if ($list_box_type_3 != null) {
			$data = ['value' => $list_box_type_3];
			SystemCModel::update_variable($id_list_box_type_3, $data);
		}

		// sidebar box type 4
		$id_list_box_type_4 = SystemQModel::get_variable_by_name('list_box_type_4')->id;
		$list_box_type_4    = $request->input('list_box_type_4');
		if ($list_box_type_4 != null) {
			$data = ['value' => $list_box_type_4];
			SystemCModel::update_variable($id_list_box_type_4, $data);
		}

		// sidebar box type 5
		$id_list_box_type_5 = SystemQModel::get_variable_by_name('list_box_type_5')->id;
		$list_box_type_5    = $request->input('list_box_type_5');
		if ($list_box_type_5 != null) {
			$data = ['value' => $list_box_type_5];
			SystemCModel::update_variable($id_list_box_type_5, $data);
		}

		// sidebar box type 6
		$id_list_box_type_6 = SystemQModel::get_variable_by_name('list_box_type_6')->id;
		$list_box_type_6    = $request->input('list_box_type_6');
		if ($list_box_type_6 != null) {
			$data = ['value' => $list_box_type_6];
			SystemCModel::update_variable($id_list_box_type_6, $data);
		}

		// sidebar box number 1
		$id_list_box_number_1 = SystemQModel::get_variable_by_name('list_box_number_1')->id;
		$list_box_number_1    = $request->input('list_box_number_1');
		if ($list_box_number_1 != null) {
			$data = ['value' => $list_box_number_1];
			SystemCModel::update_variable($id_list_box_number_1, $data);
		}

		// sidebar box number 2
		$id_list_box_number_2 = SystemQModel::get_variable_by_name('list_box_number_2')->id;
		$list_box_number_2    = $request->input('list_box_number_2');
		if ($list_box_number_2 != null) {
			$data = ['value' => $list_box_number_2];
			SystemCModel::update_variable($id_list_box_number_2, $data);
		}

		// sidebar box number 3
		$id_list_box_number_3 = SystemQModel::get_variable_by_name('list_box_number_3')->id;
		$list_box_number_3    = $request->input('list_box_number_3');
		if ($list_box_number_3 != null) {
			$data = ['value' => $list_box_number_3];
			SystemCModel::update_variable($id_list_box_number_3, $data);
		}

		// sidebar box number 4
		$id_list_box_number_4 = SystemQModel::get_variable_by_name('list_box_number_4')->id;
		$list_box_number_4    = $request->input('list_box_number_4');
		if ($list_box_number_4 != null) {
			$data = ['value' => $list_box_number_4];
			SystemCModel::update_variable($id_list_box_number_4, $data);
		}

		// sidebar box number 5
		$id_list_box_number_5 = SystemQModel::get_variable_by_name('list_box_number_5')->id;
		$list_box_number_5    = $request->input('list_box_number_5');
		if ($list_box_number_5 != null) {
			$data = ['value' => $list_box_number_5];
			SystemCModel::update_variable($id_list_box_number_5, $data);
		}

		// sidebar box number 6
		$id_list_box_number_6 = SystemQModel::get_variable_by_name('list_box_number_6')->id;
		$list_box_number_6    = $request->input('list_box_number_6');
		if ($list_box_number_6 != null) {
			$data = ['value' => $list_box_number_6];
			SystemCModel::update_variable($id_list_box_number_6, $data);
		}

		return redirect()->back()->with('success', 'Thay đổi giá trị hệ thống thành công');
	}
}