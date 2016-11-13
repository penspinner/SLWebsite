

@section('content')
	<h1>All Cards</h1>

	@foreach($cards as $card)
		<blockquote>
			{{$card->content}}<br>
			{{'-' . $card->name}}
		</blockquote>
	@endforeach
@show