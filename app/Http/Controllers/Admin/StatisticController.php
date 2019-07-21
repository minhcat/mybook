<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Http\Models\QModels\UsersQModel;
use App\Http\Models\QModels\UsersPunishQModel;
use App\Http\Models\QModels\UsersBanQModel;
use App\Http\Models\BModels\BooksBModel;
use App\Http\Models\BModels\CommentsBModel;
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
		return view('pages.admin.statistic');
	}
}