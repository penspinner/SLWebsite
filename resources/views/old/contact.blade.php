@extends('old/includes/layouts/default')
@section('content')
	<!-- Main content of the resume page -->
	<main id="content">
		<form action="email.php" method="post">
			<fieldset>
			  <legend><b>Contact Me</b></legend>
        <p>Holler at me if you want to get in touch.</p>
				<input type="text" name="cf_name" placeholder="Name" required autofocus>
				<input type="email" name="cf_email" placeholder="Email" required>
				<textarea name="cf_message" placeholder="Message" required></textarea>
				<input type="submit" value="Send">
			</fieldset>
		</form>
	</main>
@stop
