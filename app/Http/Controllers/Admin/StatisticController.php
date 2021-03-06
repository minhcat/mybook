<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersPunishQModel;
use App\Http\Models\QModels\UsersBanQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\TransBModel;
use App\Http\Models\BModels\UsersBModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Factory;

use Illuminate\Http\Request;

class StatisticController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function statistic() {
		$user_id = 15;
		$data['user'] 				= UsersQModel::get_user_by_id($user_id);
		$data['transes']			= TransBModel::get_transes_all();
		$data['view_all']			= BooksBModel::get_view_all('2019-7-21');
		$data['comment_all']		= BooksBModel::get_comment_all('2019-7-23');
		$data['like_all']			= BooksBModel::get_like_all('2019-7-24');
		$data['follow_all']			= BooksBModel::get_follow_all('2019-7-24');
		$data['rate_all']			= BooksBModel::get_rate_all('2019-7-25');
		// dd($data);
		return view('pages.admin.statistic', $data);
	}
}