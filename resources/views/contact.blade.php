@extends('includes/layouts/default')
@section('content')
<main>
	<section class="contact">
		<form class="container center-block" action="sendEmail" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<fieldset class="col-xs-6 center-block">
				<legend><h2>Contact Me</h2></legend>
        <p>Holler at me if you want to get in touch.</p>
				<input type="text" name="name" placeholder="Name" required autofocus>
				<input type="email" name="emailAddress" placeholder="Email" required>
				<input type="text" name="subject" placeholder="Subject" required>
				<input type="file" name="files">
				<textarea name="message" placeholder="Message" required></textarea>
				<input type="submit" value="Send">
			</fieldset>
		</form>
	</section>
</main>
@stop