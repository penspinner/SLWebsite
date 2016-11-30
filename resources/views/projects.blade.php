@extends('includes/layouts/default')
@section('content')
<main>
	<section class="">
		<div class="info text-center container">
			<h1 class="margin">My Projects</h1>
		</div>
	</section>
	
	<!-- Beginning of project listings	 -->
	<div class="projects">
		<!-- A section tag for each project	 -->
		<section class="background-lightBlue">
			<div class="container text-center">
				<h2>Digital Conceptions</h2>
				<h4>Lead Programmer</h4>
				<a href="http://digital-conceptions-6.appspot.com/">
					<img class="project-image" src="images/projects/DigitalConceptions.png" alt="Digital Conceptions">
				</a>
				<p>
					Description
				</p>
			</div>
		</section>
	</div>
</main>
@stop