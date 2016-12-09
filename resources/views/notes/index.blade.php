@extends('includes/layouts/default')
@section('content')
<main>
	<section class="notes">
		<form class="container center-block" action="sendEmail" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<fieldset class="col-xs-6 center-block">
				<legend><h2>Write me a note</h2></legend>
        <p>Holler at me if you want to get in touch.</p>
				<label for="name">Name</label>
				<input type="text" name="name">
				<label for="content">Content</label>
				<textarea name="content"></textarea>
				<input type="submit" value="Post">
			</fieldset>
		</form>

		<div class="blackboard container">
			<span class="chalk"></span>
			<div class="">
				@foreach($notes as $note)
					<div class="sticky-note col-xs-3">
						<p>Note from {{$note->name}}:</p>
						<p>{{$note->content}}</p>
					</div>
				@endforeach
				
			</div>
		</div>
	</section>
	
	<script src="js/notes.js"></script>
</main>
@stop