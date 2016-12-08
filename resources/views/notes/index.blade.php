

@section('content')
	<h1>All Cards</h1>

	@foreach($notes as $note)
		<blockquote>
			{{$note->content}}<br>
			{{'-' . $note->name}}
		</blockquote>
	@endforeach
@show