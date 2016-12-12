@extends('includes/layouts/default')
@section('content')
<main>
	<section class="notes">
		<form class="container center-block" action="postNote" method="post">
			{{ csrf_field() }}
			<fieldset class="col-sm-6 center-block">
				<legend><h2>Stick a note on my blackboard</h2></legend>
				<label for="name">Name</label>
				<input type="text" name="name" required>
				<label for="content">Note Body</label>
				<textarea name="content" required></textarea>
				<input type="submit" value="Post">
			</fieldset>
		</form>

		@include('notes.blackboard')
	</section>
	
	<script src="js/notes.js"></script>
</main>
@stop