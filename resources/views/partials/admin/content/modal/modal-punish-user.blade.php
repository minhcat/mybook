<div class="modal fade" id="modal-comment-punish">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Phạt Người Dùng</h4>
			</div>
			<div class="modal-body">
				<input class="token" type="hidden" name="_token" value="{{ csrf_token() }}">
				<p>Chọn hình thức phạt</p>
				<div class="form-group">
					<div class="radio">
						<label>
							<input type="radio" name="time" id="optionsRadios1" value="5" checked>
							Cấm bình luận 3 ngày
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="time" id="optionsRadios2" value="7">
							Cấm bình luận trong 1 tuần
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="time" id="optionsRadios3" value="30">
							Cấm bình luận trong 1 tháng
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="time" id="optionsRadios3" value="90">
							Cấm bình luận trong 3 tháng
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="time" id="optionsRadios3" value="9000">
							Cấm bình luận vĩnh viễn
						</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>