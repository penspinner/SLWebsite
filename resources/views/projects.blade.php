@extends('includes/layouts/default')
@section('content')
<main>
	<section class="background-darkGreen">
		<div class="text-center container">
			<h1 class="margin">A Glimpse of My Projects</h1>
			<div class="col-xs-4 col-xs-offset-4 form-group">
				<label>Filter Projects by Title</label>
				<input id="filterProjects" class="form-control" type="search" autofocus>
			</div>
		</div>
	</section>
	
	<!-- Beginning of project listings	 -->
	<div class="projects">
		<!-- A section tag for each project	 -->
		@foreach($projects as $project)
		<section class="project {{ $project->bg }}">
			<div class="container text-center">
				<h2 class="title">{{ $project->title }}</h2>
				<h4>{{ $project->role }}</h4>
				<a href="{{ $project->url }}" target="_blank">
					<img class="project-image" src="{{ $project->src }}" alt="{{ $project->alt }}">
				</a>
				<div class="col-xs-6 col-xs-offset-3 margin">
					<p>
						{{ $project->desc }}
					</p>
				</div>
			</div>
		</section>
		@endforeach
	</div>
</main>
@stop