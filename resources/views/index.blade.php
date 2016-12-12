@extends('includes/layouts/default')
@section('content')
<main>
	<section class="background-desk">
		<div class="info text-center container">
			<h1 class="margin">Steven Liao</h1>
			@include('includes/components/icons')
		</div>
	</section>
	<section class="pad">
		<div class="darkgreen2 container">
			<div class="col-sm-12">
				<h1 class="margin text-center">
					Ay! I'm Steven, and I'm a junior developer.
				</h1>
			</div>
			<div class="col-sm-6 text-center">
				<img class="comp-image" src="/images/me_comp.jpg" alt="Computer.jpg">
			</div>
			<div class="col-sm-6">
				<p>
					I am very passionate about software development and web development. My interest in software started since I was a little kid playing video games and surfing the web. The interest developed during my college years. I have made websites, web apps, games, and will continue to make more and explore newer technologies. 
				</p>
				<p>
					<strong>As a developer, I like to exceed expectations.</strong>
				</p>
				<div class="col-sm-4 pad text-center">
					<a class="link-button" href="/projects">View Projects</a>
				</div>
				<div class="col-sm-4 pad text-center">
					<a class="link-button" target="_blank" href="/files/pdf/StevenLiao_Resume.pdf">Resume</a>
				</div>
			</div>
		</div>
	</section>
	<section class="notes pad">
		<a href="notes">
			@include('notes.blackboard')
		</a>
	</section>
</main>
@stop