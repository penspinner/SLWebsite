@extends('includes/layouts/default')
@section('content')
<main>
	<section class="background-darkGreen">
		<div class="text-center container">
			<h1 class="margin">A Glimpse of My Projects</h1>
			<div class="col-sm-4 col-sm-offset-4 form-group">
				<label>Filter Projects</label>
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
				<h2 class="title">
					<a href="{{ $project->url }}" target="_blank">{{ $project->title }}</a>
				</h2>
				<h4>{{ $project->role }}</h4>
				<a href="{{ $project->url }}" target="_blank">
					<img class="project-image" src="{{ $project->src }}" alt="{{ $project->alt }}">
				</a>
				<div class="col-sm-6 margin">
					<p class="desc">
						{{ $project->desc }}
					</p>
				</div>
				<div class="col-sm-6 margin">
					<h4>
						Technologies Used
					</h4>
					<p class="tech">
						{{ $project->techs }}
					</p>
				</div>
			</div>
		</section>
		@endforeach
	</div>
</main>
@stop