@extends('includes/layouts/default')
@section('content')
<main class="background-darkGreen" style="height:90%;">
	<div class="col-sm-6 col-sm-offset-3">
		<h1>
			Email Sent!
		</h1>
		<p>
			Sender: {{ $emailContent->emailAddress }}<br>
			Subject: {{ $emailContent->subject }}<br>
			Message: {{ $emailContent->message }}
		</p>
		<p>
			Thanks for reaching out to me! I will respond as soon as possible. Have a great day.
		</p>
	</div>
</main>
@stop