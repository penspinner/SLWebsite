@extends('includes/layouts/default')
@section('content')
<main>
	<section class="contact">
		<form action="sendEmail" method="post">
			<fieldset>
			  <legend><b>Contact Me</b></legend>
        <p>Holler at me if you want to get in touch.</p>
				<input type="text" name="name" placeholder="Name" required autofocus>
				<input type="email" name="emailAddress" placeholder="Email" required>
				<input type="text" name="subject" placeholder="Subject" required>
				<textarea name="message" placeholder="Message" required></textarea>
				<input type="submit" value="Send">
			</fieldset>
		</form>
	</section>
</main>
@stop