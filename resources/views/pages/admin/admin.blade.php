@extends('master.admin')

@section('title')
Admin
@endsection

@section('admin-job')
Admin
@endsection

@section('define-header')
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap.css') }}">
	<!-- My Book -->
	<link rel="stylesheet" href="{{ asset('css/admin/common.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/uploader.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection

@section('sidebar')
	@include('partials.admin.aside.admin')
@endsection

@section('content')
	<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Admin
			<small>Quản trị trang web</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		@include('partials.admin.content.well')
		<!-- Statistic book control box -->
		@include('partials.admin.content.small.database-book')
		
		@include('partials.admin.content.small.database-contact')

		@include('partials.admin.content.small.box-mail')

		@include('partials.admin.content.small.box-notification')
		<!-- Statistic book control box -->
		@include('partials.admin.content.small.statistic-book')
		<!-- Statistic category control box -->
		@include('partials.admin.content.small.statistic-category')
		<!-- Statistic user control box -->
		@include('partials.admin.content.small.statistic-user')
		<!-- Statistic translator control box -->
		@include('partials.admin.content.small.statistic-trans')

		<!-- Box -->
		<div class="row">
			<div class="col-xs-12">
				<!-- Database Box -->
				@include('partials.admin.content.list.book.list-book-admin')

				@include('partials.admin.content.list.book.list-book-error-admin')

				@include('partials.admin.content.list.chap.list-chap-admin')

				@include('partials.admin.content.list.view.list-view-admin')

				@include('partials.admin.content.list.like.list-like-admin')

				@include('partials.admin.content.list.comment.list-comment-admin')

				@include('partials.admin.content.list.follow.list-follow-admin')

				@include('partials.admin.content.list.rate.list-rate-admin')

				@include('partials.admin.content.list.character.list-character-admin')

				@include('partials.admin.content.list.author.list-author-admin')

				@include('partials.admin.content.list.user.list-user-admin')

				@include('partials.admin.content.list.category.list-category-admin')

				@include('partials.admin.content.list.trans.list-trans-admin')

				<!-- Add, Edit Box -->
				@include('partials.admin.content.new.new-category')

				@include('partials.admin.content.edit.edit-category')

				@include('partials.admin.content.new.new-trans')

				@include('partials.admin.content.edit.edit-trans')

				@include('partials.admin.content.new.new-character')

				@include('partials.admin.content.edit.edit-character')

				@include('partials.admin.content.new.new-author')

				@include('partials.admin.content.edit.edit-author')
				<!-- End Add, Edit Box -->

				@include('partials.admin.content.list.book.list-book-error')

				@include('partials.admin.content.list.comment.list-comment-report')
				<!-- End Database Box -->

				<!-- Statistic -->
				@include('partials.admin.content.statistic.statistic-book-all')

				<!-- Approve Box -->
				@include('partials.admin.content.list.book.list-book-approve')

				@include('partials.admin.content.list.user.list-user-approve')
				<!-- End Approve Box -->

				<!-- Permiss Box -->
				@include('partials.admin.content.list.staff.list-staff-permiss')
				<!-- End Permiss Box -->

				<!-- Timeline Box -->
				@include('partials.admin.content.timeline.timeline-all')
				<!-- End Timeline Box -->

				<!-- Mail Box -->
				@include('partials.admin.content.system.mail')

				@include('partials.admin.content.list.system.list-mail-receive')

				@include('partials.admin.content.list.system.list-mail-send')

				@include('partials.admin.content.detail.detail-mail', ['mails' => $mails_receive])

				@include('partials.admin.content.detail.detail-mail', ['mails' => $mails_send])

				@include('partials.admin.content.detail.detail-notification', ['noties' => $noties_receive])

				@include('partials.admin.content.detail.detail-notification', ['noties' => $noties_send])
				<!-- End Mail Box -->

				<!-- Notification Box -->
				@include('partials.admin.content.system.notification')

				@include('partials.admin.content.list.system.list-notification-receive')

				@include('partials.admin.content.list.system.list-notification-send')
				<!-- End Notification Box -->

				<!-- Setting Box -->
				@include('partials.admin.content.system.setting')
				<!-- End Setting Box -->
			</div>

			<div class="col-xs-9">
				<!-- statistic contant book -->
				@include('partials.admin.content.statistic.statistic-book-other')

				@include('partials.admin.content.statistic.statistic-book-time')

				@include('partials.admin.content.statistic.statistic-chap')

				<!-- statistic contant category -->
				@include('partials.admin.content.statistic.statistic-category-other')

				@include('partials.admin.content.statistic.statistic-category-time')

				<!-- statistic contant user -->
				@include('partials.admin.content.statistic.statistic-user-other')

				@include('partials.admin.content.statistic.statistic-user-time')

				<!-- statistic contant translator -->
				@include('partials.admin.content.statistic.statistic-trans-other')

				@include('partials.admin.content.statistic.statistic-trans-time')

				<!-- Timeline Box -->
				@include('partials.admin.content.timeline.timeline-staff')
				<!-- End Timeline Box -->
			</div>
			<div class="col-xs-3">
				@include('partials.admin.content.list.staff.list-staff-small')

				<!-- list book small statistaic -->
				@include('partials.admin.content.list.book.list-book-button-small')

				<!-- list book small statistaic not button-->
				@include('partials.admin.content.list.book.list-book-small')

				<!-- list category small statistaic -->
				@include('partials.admin.content.list.category.list-category-small')

				<!-- list user small statistaic -->
				@include('partials.admin.content.list.user.list-user-small')

				<!-- list translator small statistaic -->
				@include('partials.admin.content.list.trans.list-trans-small')
			</div>
		</div>

		<!-- Modal -->
		@include('partials.admin.content.modal.modal-reply')

		@include('partials.admin.content.modal.modal-reply-user')

		@include('partials.admin.content.modal.modal-permiss')

		@include('partials.admin.content.modal.modal-remove-category')

		@include('partials.admin.content.modal.modal-remove-trans')

		@include('partials.admin.content.modal.modal-remove-character')

		@include('partials.admin.content.modal.modal-remove-author')

		@include('partials.admin.content.modal.modal-remove-mail')

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('define-footer')
<script src="{{ asset('js/admin/admin.js') }}"></script>

<script src="{{ asset('js/admin/jquery.dataTables.js') }}"></script>
<script src="{{ asset('js/admin/dataTables.bootstrap.js') }}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
	$(function () {
		$('#table-book-button-small').DataTable({
			"lengthMenu": [6],
			"lengthChange": false,
			"searching": false,
			"pagingType": "numbers",
			"info": false,
		});
		// DataTable
		$('#table-book').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-chap').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-comment').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-view').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-like').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-follow').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-rate').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-character').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-author').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-user').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-category').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-trans').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-approve-book').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-approve-user').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-book-error').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-report').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-staff').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-mail-receive').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-mail-send').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-noti-receive').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-noti-send').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});

		// Datepicker
		$('#character-birthday-new').datepicker({
			autoclose: true
		});
		$('#character-birthday-edit').datepicker({
			autoclose: true
		});

		// ckeditor
		CKEDITOR.replace('trans-content-new', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		// CKEDITOR.replace('trans-content-edit', {
		// 	toolbar: [
		// 		[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
		// 		[ 'FontSize', 'TextColor', 'BGColor' ]
		// 	]
		// });
		CKEDITOR.replace('character-content-new', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		// CKEDITOR.replace('character-content-edit', {
		// 	toolbar: [
		// 		[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
		// 		[ 'FontSize', 'TextColor', 'BGColor' ]
		// 	]
		// });
		// CKEDITOR.replace('author-content-new', {
		// 	toolbar: [
		// 		[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
		// 		[ 'FontSize', 'TextColor', 'BGColor' ]
		// 	]
		// });
		// CKEDITOR.replace('author-content-edit', {
		// 	toolbar: [
		// 		[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
		// 		[ 'FontSize', 'TextColor', 'BGColor' ]
		// 	]
		// });
		CKEDITOR.replace('mail-content', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' , '-', 'Image', 'Table', '-', 'Scayt'],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		CKEDITOR.replace('noti-content', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
	})
	var admin_id = {{ $user->id }};
	// ----------- //
	// --- ALL --- //
	// ----------- //

	// -- VIEW -- //
	var view_day_all = [];
	@foreach ($view_all['day'] as $v)
		view_day_all.push({{$v}});
	@endforeach
	var view_week_all = [];
	@foreach ($view_all['week'] as $v)
		view_week_all.push({{$v}});
	@endforeach
	var view_month_all = [];
	@foreach ($view_all['month'] as $v)
		view_month_all.push({{$v}});
	@endforeach
	var view_season_all = [];
	@foreach ($view_all['season'] as $v)
		view_season_all.push({{$v}});
	@endforeach
	var view_year_all = [];
	@foreach ($view_all['year'] as $v)
		view_year_all.push({{$v}});
	@endforeach
	// -- COMMENT -- //
	var comment_day_all = [];
	@foreach ($comment_all['day'] as $v)
		comment_day_all.push({{$v}});
	@endforeach
	var comment_week_all = [];
	@foreach ($comment_all['week'] as $v)
		comment_week_all.push({{$v}});
	@endforeach
	var comment_month_all = [];
	@foreach ($comment_all['month'] as $v)
		comment_month_all.push({{$v}});
	@endforeach
	var comment_season_all = [];
	@foreach ($comment_all['season'] as $v)
		comment_season_all.push({{$v}});
	@endforeach
	var comment_year_all = [];
	@foreach ($comment_all['year'] as $v)
		comment_year_all.push({{$v}});
	@endforeach
	// -- LIKE -- //
	var like_day_all = [];
	@foreach ($like_all['day'] as $v)
		like_day_all.push({{$v}});
	@endforeach
	var like_week_all = [];
	@foreach ($like_all['week'] as $v)
		like_week_all.push({{$v}});
	@endforeach
	var like_month_all = [];
	@foreach ($like_all['month'] as $v)
		like_month_all.push({{$v}});
	@endforeach
	var like_season_all = [];
	@foreach ($like_all['season'] as $v)
		like_season_all.push({{$v}});
	@endforeach
	var like_year_all = [];
	@foreach ($like_all['year'] as $v)
		like_year_all.push({{$v}});
	@endforeach
	// -- FOLLOW -- //
	var follow_day_all = [];
	@foreach ($follow_all['day'] as $v)
		follow_day_all.push({{$v}});
	@endforeach
	var follow_week_all = [];
	@foreach ($follow_all['week'] as $v)
		follow_week_all.push({{$v}});
	@endforeach
	var follow_month_all = [];
	@foreach ($follow_all['month'] as $v)
		follow_month_all.push({{$v}});
	@endforeach
	var follow_season_all = [];
	@foreach ($follow_all['season'] as $v)
		follow_season_all.push({{$v}});
	@endforeach
	var follow_year_all = [];
	@foreach ($follow_all['year'] as $v)
		follow_year_all.push({{$v}});
	@endforeach
	// -- RATE -- //
	// ** SUM  ** //
	// day
	var rate_day_all = [];
	// create array
	@foreach ($rate_all['sum']['day'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_day_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['sum']['day'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_day_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// week
	var rate_week_all = [];
	// create array
	@foreach ($rate_all['sum']['week'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_week_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['sum']['week'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_week_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// month
	var rate_month_all = [];
	// create array
	@foreach ($rate_all['sum']['month'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_month_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['sum']['month'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_month_all[{{$j}}][{{$i-1}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// season
	var rate_season_all = [];
	// create array
	@foreach ($rate_all['sum']['season'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_season_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['sum']['season'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_season_all[{{$j}}][{{$i-1}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// year
	var rate_year_all = [];
	// create array
	@foreach ($rate_all['sum']['year'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_year_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['sum']['year'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_year_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// ** PERCENT ** //
	// day
	var rate_day_per_all = [];
	// create array
	@foreach ($rate_all['percent']['day'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_day_per_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['percent']['day'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_day_per_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// week
	var rate_week_per_all = [];
	// create array
	@foreach ($rate_all['percent']['week'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_week_per_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['percent']['week'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_week_per_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// month
	var rate_month_per_all = [];
	// create array
	@foreach ($rate_all['percent']['month'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_month_per_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['percent']['month'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_month_per_all[{{$j}}][{{$i-1}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// season
	var rate_season_per_all = [];
	// create array
	@foreach ($rate_all['percent']['season'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_season_per_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['percent']['season'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_season_per_all[{{$j}}][{{$i-1}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// year
	var rate_year_per_all = [];
	// create array
	@foreach ($rate_all['percent']['year'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_year_per_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['percent']['year'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_year_per_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// ------------ //
	// --- BOOK --- //
	// ------------ //

	// --- VIEW --- //
	var view_day_book = [2,1,3,4,5];
</script>
<script src="{{ asset('js/admin/statistic.js') }}"></script>
@endsection