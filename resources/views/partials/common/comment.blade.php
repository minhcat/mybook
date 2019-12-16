<div class="line cmd comment">
	<h4>Bình luận</h4>
	<div class="sort clearfix">
		<span class="left"><strong>20 bình luận</strong></span>
		<div class="right">
			<strong>Sắp xếp theo</strong> 
			<button class="select" type="button">
				<span class="text">mặc định</span>
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li>mới nhất</li>
				<li>nhiều like nhất</li>
				<li>nhiều dislike nhất</li>
				<li>mặc định</li>
			</ul>
		</div>
	</div>
	<hr>
	<div class="form-comment parent clearfix">
		<div class="image">
			@if (Auth::check())
			<img src="{{ asset('image/users/'.$user_login->image.'.jpg') }}" class="img-circle" data-image="{{ $user_login->image }}">
			@else
			<img src="{{ asset('image/user-default.png') }}" class="img-circle" data-image="user-default">
			@endif
		</div>
		<div class="text-cmd {{ (isset($large_comment)) ? 'large' : '' }}">
			<div class="textarea" data-placeholder="thêm bình luận" contentEditable="true" spellcheck="false"></div>
			<input class="token" type="hidden" name="_token" value="{{ csrf_token() }}">
			{{-- Submit Button for type --}}
			@if ($page == 'author')
			<button class="btn submit open-modal" data-id="{{ $author->id }}" data-page="author">Đăng bình luận</button>
			@elseif ($page == 'book')
			<button class="btn submit open-modal" data-id="{{ $book->id }}" data-page="book">Đăng bình luận</button>
			@elseif ($page == 'character')
			<button class="btn submit open-modal" data-id="{{ $character->id }}" data-page="character">Đăng bình luận</button>
			@elseif ($page == 'trans')
			<button class="btn submit open-modal" data-id="{{ $trans->id }}" data-page="trans">Đăng bình luận</button>
			@elseif ($page == 'user')
			<button class="btn submit open-modal" data-id="{{ $user->id }}" data-page="user">Đăng bình luận</button>
			@else
			<button class="btn submit open-modal" data-id="{{ $chap['id'] }}" data-page="chap">Đăng bình luận</button>
			@endif
			{{-- End Submit Button --}}
			<button class="btn reset">Hủy bỏ</button>
			<div class="dropdown emoji-drop">
				<button class="btn emoji select">
					<img src="{{ asset('image/emoji/emoji-04.png') }}" width="28px">
				</button>
				<div class="dropdown-menu">
					<!-- 1-10 -->
					<img src="{{ asset('image/emoji/emoji-01.png') }}" data-image="emoji-01">
					<img src="{{ asset('image/emoji/emoji-02.png') }}" data-image="emoji-02">
					<img src="{{ asset('image/emoji/emoji-03.png') }}" data-image="emoji-03">
					<img src="{{ asset('image/emoji/emoji-04.png') }}" data-image="emoji-04">
					<img src="{{ asset('image/emoji/emoji-05.png') }}" data-image="emoji-05">
					<img src="{{ asset('image/emoji/emoji-06.png') }}" data-image="emoji-06">
					<img src="{{ asset('image/emoji/emoji-07.png') }}" data-image="emoji-07">
					<img src="{{ asset('image/emoji/emoji-08.png') }}" data-image="emoji-08">
					<img src="{{ asset('image/emoji/emoji-09.png') }}" data-image="emoji-09">
					<img src="{{ asset('image/emoji/emoji-10.png') }}" data-image="emoji-10">
					<!-- 10-20 -->
					<img src="{{ asset('image/emoji/emoji-11.png') }}" data-image="emoji-11">
					<img src="{{ asset('image/emoji/emoji-12.png') }}" data-image="emoji-12">
					<img src="{{ asset('image/emoji/emoji-13.png') }}" data-image="emoji-13">
					<img src="{{ asset('image/emoji/emoji-14.png') }}" data-image="emoji-14">
					<img src="{{ asset('image/emoji/emoji-15.png') }}" data-image="emoji-15">
					<img src="{{ asset('image/emoji/emoji-16.png') }}" data-image="emoji-16">
					<img src="{{ asset('image/emoji/emoji-17.png') }}" data-image="emoji-17">
					<img src="{{ asset('image/emoji/emoji-18.png') }}" data-image="emoji-18">
					<img src="{{ asset('image/emoji/emoji-19.png') }}" data-image="emoji-19">
					<img src="{{ asset('image/emoji/emoji-20.png') }}" data-image="emoji-20">
					<!-- 20-30 -->
					<img src="{{ asset('image/emoji/emoji-21.png') }}" data-image="emoji-21">
					<img src="{{ asset('image/emoji/emoji-22.png') }}" data-image="emoji-22">
					<img src="{{ asset('image/emoji/emoji-23.png') }}" data-image="emoji-23">
					<img src="{{ asset('image/emoji/emoji-24.png') }}" data-image="emoji-24">
					<img src="{{ asset('image/emoji/emoji-25.png') }}" data-image="emoji-25">
					<img src="{{ asset('image/emoji/emoji-26.png') }}" data-image="emoji-26">
					<img src="{{ asset('image/emoji/emoji-27.png') }}" data-image="emoji-27">
					<img src="{{ asset('image/emoji/emoji-28.png') }}" data-image="emoji-28">
					<img src="{{ asset('image/emoji/emoji-29.png') }}" data-image="emoji-29">
					<img src="{{ asset('image/emoji/emoji-30.png') }}" data-image="emoji-30">
					<!-- 30-40 -->
					<img src="{{ asset('image/emoji/emoji-31.png') }}" data-image="emoji-31">
					<img src="{{ asset('image/emoji/emoji-32.png') }}" data-image="emoji-32">
					<img src="{{ asset('image/emoji/emoji-33.png') }}" data-image="emoji-33">
					<img src="{{ asset('image/emoji/emoji-34.png') }}" data-image="emoji-34">
					<img src="{{ asset('image/emoji/emoji-35.png') }}" data-image="emoji-35">
					<img src="{{ asset('image/emoji/emoji-36.png') }}" data-image="emoji-36">
					<img src="{{ asset('image/emoji/emoji-37.png') }}" data-image="emoji-37">
					<img src="{{ asset('image/emoji/emoji-38.png') }}" data-image="emoji-38">
					<img src="{{ asset('image/emoji/emoji-39.png') }}" data-image="emoji-39">
					<img src="{{ asset('image/emoji/emoji-40.png') }}" data-image="emoji-40">
					<!-- 40-50 -->
					<img src="{{ asset('image/emoji/emoji-41.png') }}" data-image="emoji-41">
					<img src="{{ asset('image/emoji/emoji-42.png') }}" data-image="emoji-42">
					<img src="{{ asset('image/emoji/emoji-43.png') }}" data-image="emoji-43">
					<img src="{{ asset('image/emoji/emoji-44.png') }}" data-image="emoji-44">
					<img src="{{ asset('image/emoji/emoji-45.png') }}" data-image="emoji-45">
					<img src="{{ asset('image/emoji/emoji-46.png') }}" data-image="emoji-46">
					<img src="{{ asset('image/emoji/emoji-47.png') }}" data-image="emoji-47">
					<img src="{{ asset('image/emoji/emoji-48.png') }}" data-image="emoji-48">
					<img src="{{ asset('image/emoji/emoji-49.png') }}" data-image="emoji-49">
					<img src="{{ asset('image/emoji/emoji-50.png') }}" data-image="emoji-50">
					<!-- 50-60 -->
					<img src="{{ asset('image/emoji/emoji-51.png') }}" data-image="emoji-51">
					<img src="{{ asset('image/emoji/emoji-52.png') }}" data-image="emoji-52">
					<img src="{{ asset('image/emoji/emoji-53.png') }}" data-image="emoji-53">
					<img src="{{ asset('image/emoji/emoji-54.png') }}" data-image="emoji-54">
					<img src="{{ asset('image/emoji/emoji-55.png') }}" data-image="emoji-55">
					<img src="{{ asset('image/emoji/emoji-56.png') }}" data-image="emoji-56">
					<img src="{{ asset('image/emoji/emoji-57.png') }}" data-image="emoji-57">
					<img src="{{ asset('image/emoji/emoji-58.png') }}" data-image="emoji-58">
					<img src="{{ asset('image/emoji/emoji-59.png') }}" data-image="emoji-59">
					<img src="{{ asset('image/emoji/emoji-60.png') }}" data-image="emoji-60">
					<!-- 60-70 -->
					<img src="{{ asset('image/emoji/emoji-61.png') }}" data-image="emoji-61">
					<img src="{{ asset('image/emoji/emoji-62.png') }}" data-image="emoji-62">
					<img src="{{ asset('image/emoji/emoji-63.png') }}" data-image="emoji-63">
					<img src="{{ asset('image/emoji/emoji-64.png') }}" data-image="emoji-64">
					<img src="{{ asset('image/emoji/emoji-65.png') }}" data-image="emoji-65">
					<img src="{{ asset('image/emoji/emoji-66.png') }}" data-image="emoji-66">
					<img src="{{ asset('image/emoji/emoji-67.png') }}" data-image="emoji-67">
					<img src="{{ asset('image/emoji/emoji-68.png') }}" data-image="emoji-68">
					<img src="{{ asset('image/emoji/emoji-69.png') }}" data-image="emoji-69">
					<img src="{{ asset('image/emoji/emoji-70.png') }}" data-image="emoji-70">
					<!-- 70-80 -->
					<img src="{{ asset('image/emoji/emoji-71.png') }}" data-image="emoji-71">
					<img src="{{ asset('image/emoji/emoji-72.png') }}" data-image="emoji-72">
					<img src="{{ asset('image/emoji/emoji-73.png') }}" data-image="emoji-73">
					<img src="{{ asset('image/emoji/emoji-74.png') }}" data-image="emoji-74">
					<img src="{{ asset('image/emoji/emoji-75.png') }}" data-image="emoji-75">
				</div>
			</div>
		</div>
	</div>
	<div class="list-comment clearfix" data-image="{{ $user_login->image }}">
		<div class="list-cmd">
			@foreach ($comments as $i => $comment)
			@if ($i <= 3)
			<div class="item-comment clearfix" data-id="{{ $comment->id }}">
				<div class="image">
					<img src="{{ asset('image/users/'.$comment->image.'.jpg') }}" class="img-circle">
				</div>
				<div class="info main {{ (isset($large_comment)) ? 'large' : '' }}">
					<p class="name"><a href="">{{ $comment->name }}</a> · <span>{{ $comment->nickname }}</span></p>
					<p class="text">{!! $comment->content !!}</p>
					<p class="like"><a class="cmd-main" disabled="disabled">Phản hồi</a> · <span class="like"><img src="{{ asset('image/like.png') }}"> <span class="num-like">{{ ($comment->like != 0) ? $comment->like : '' }}</span></span> · <span class="dislike"><img src="{{ asset('image/dislike.png') }}"> <span class="num-dislike">{{ ($comment->dislike != 0) ? $comment->dislike : '' }}</span></span> <span class="cmd-date">· {{ date_format(date_create($comment->datetime), 'd/m/Y') }}</span></p>
					@if (!empty($comment->reply))
					<div class="list-comment reply">
						<div class="list-cmd">
							@foreach ($comment->reply as $key => $reply)
							@if ($key < 2)
								<div class="item-comment clearfix" data-id="{{ $comment->id }}">
									<div class="image">
										<img src="{{ asset('image/users/'.$reply->image.'.jpg') }}" class="img-circle">
									</div>
									<div class="info">
										<p class="name"><a href="">{{ $reply->name }}</a> · <span>{{ $reply->nickname }}</span></p>
										<p class="text">{!! $reply->content !!}</p>
										<p class="like"><a class="cmd-child" disabled="disabled">Phản hồi</a> · <span class="like"><img src="{{ asset('image/like.png') }}"> <span class="num-like">{{ ($reply->like != 0) ? $reply->like : '' }}</span></span> · <span class="dislike"><img src="{{ asset('image/dislike.png') }}"> <span class="num-dislike">{{ ($comment->dislike != 0) ? $comment->dislike : '' }}</span></span> <span class="cmd-date">· 04/01/2018</span></p>
									</div>
								</div>
							@endif
							@endforeach
						</div>
						@if (count($comment->reply) > 2)
						<div class="more">
							<a disabled="disabled">Xem thêm bình luận</a>
						</div>
						@endif
					</div>
					@endif
				</div>
			</div>
			@endif
			@endforeach
		</div>
		@if (count($comments) > 3)
		<div class="more">
			<a disabled="disabled">Xem thêm bình luận</a>
		</div>
		@endif
	</div>
</div>