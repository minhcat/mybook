<!-- REQUIRED JS SCRIPTS -->

<!-- ChartJS -->
<script src="js/admin/chart.min.js"></script>
<!-- jQuery 3 -->
<script src="js/admin/jquery.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/admin/bootstrap.js"></script>
<!-- AdminLTE App -->
<script src="js/admin/adminlte.js"></script>
<!-- Chartjs Label Plugin -->
<script src="js/admin/chartjs-plugin-labels.min.js"></script>
<!-- Datepicker -->
<script src="js/admin/bootstrap-datepicker.min.js"></script>
<!-- CKEditor -->
<script src="js/admin/ckeditor/ckeditor.js"></script>

<!-- MyBook -->
<script src="js/admin/common.js"></script>

<!-- ChartJS option -->
<script src="js/admin/upload.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#datepicker-book-new').datepicker({
			autoclose: true
		});
		$('#datepicker-book-edit').datepicker({
			autoclose: true
		});
		CKEDITOR.replace('book-content', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		CKEDITOR.replace('book-content-edit', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		CKEDITOR.replace('mail-content', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' , '-', 'Image', 'Table', '-', 'Scayt'],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
	});
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
		 Both of these plugins are recommended to enhance the
		 user experience. -->