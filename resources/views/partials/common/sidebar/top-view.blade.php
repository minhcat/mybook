<div class="box first">
	<div class="header">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Top Ngày</a></li>
			<li class="hide-md"><a data-toggle="tab" href="#menu1">Top Tuần</a></li>
			<li><a data-toggle="tab" href="#menu2">Top Tháng</a></li>
		</ul>
	</div>

	<div class="content">
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<table>
					@foreach ($top_view['date'] as $key => $book)
					<tr class="{{ ($key%2 == 0) ? 'gray' : '' }}">
						<td>
							<p><a href="{{ url('/detail/book/'.$book->slug) }}" data-id="{{ $book->id }}" class="show-popup book">{{ $book->name }}</a></p>
							<p>{{ $book->view }} lượt xem</p>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			<div id="menu1" class="tab-pane fade">
				<table>
					@foreach ($top_view['week'] as $key => $book)
					<tr class="{{ ($key%2 == 0) ? 'gray' : '' }}">
						<td>
							<p><a href="{{ url('/detail/book/'.$book->slug) }}" class="show-popup book">{{ $book->name }}</a></p>
							<p>{{ $book->view }} lượt xem</p>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			<div id="menu2" class="tab-pane fade">
				<table>
					@foreach ($top_view['month'] as $key => $book)
					<tr class="{{ ($key%2 == 0) ? 'gray' : '' }}">
						<td>
							<p><a href="{{ url('/detail/book/'.$book->slug) }}" class="show-popup book">{{ $book->name }}</a></p>
							<p>{{ $book->view }} lượt xem</p>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>