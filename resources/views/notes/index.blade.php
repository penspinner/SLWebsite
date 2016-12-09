@extends('includes/layouts/default')
@section('content')
<main>
	<section class="notes">
		<form class="container center-block" action="postNote" method="post">
			{{ csrf_field() }}
			<fieldset class="col-xs-6 center-block">
				<legend><h2>Stick a note on my blackboard</h2></legend>
				<label for="name">Name</label>
				<input type="text" name="name" required>
				<label for="content">Note Body</label>
				<textarea name="content" required></textarea>
				<input type="submit" value="Post">
			</fieldset>
		</form>

		<div class="blackboard container">
			<span class="chalk" style="left:75%; height:5px; width:25px;"></span>
			<span class="chalk" style="left:50%; height:8px; width:40px;"></span>
			<span class="chalk" style="left:10%; height:12px; width:35px; border-radius:6px;"></span>
			<span class="chalk" style="left:20%; height:6px; width:30px;"></span>
			@foreach($notes->reverse() as $note)
				<div class="sticky-note col-xs-3">
					<p>Note from {{$note->name}}</p>
					<p>Written on: {{$note->created_at->format('m/d/y h:iA')}}</p>
					<p>{{$note->content}}</p>
				</div>
			@endforeach
		</div>
	</section>
	
	<script src="js/notes.js"></script>
</main>
@stop