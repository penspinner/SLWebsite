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
		<section class="project background-grayGradient">
			<div class="container text-center">
				<h2 class="title">Quarterhorse Technology</h2>
				<h4>Website Developer/Redesigner</h4>
				<a href="http://stevenliao.tech/~108607000/final" target="_blank">
					<img class="project-image" src="images/projects/QTI.png" alt="QTI">
				</a>
				<div class="col-xs-6 col-xs-offset-3 margin">
					<p>
						Redesigned Quarterhorse Technology Inc's website to be more viewport-responsive and mobile adaptive with HTML, CSS, and JavaScript.
					</p>
				</div>
			</div>
		</section>
		<section class="project background-lightBlue">
			<div class="container text-center">
				<h2 class="title">Digital Conceptions</h2>
				<h4>Lead Programmer</h4>
				<a href="http://digital-conceptions-6.appspot.com/" target="_blank">
					<img class="project-image" src="images/projects/DigitalConceptions.png" alt="Digital Conceptions">
				</a>
				<div class="col-xs-6 col-xs-offset-3 margin">
					<p>
						Have you ever wanted to read comics AND have the ability to create comics online? Well, here you go. Digital Conceptions allows the public to read and create comics for the world to see. I created this project with a team of 3 others in school. We used HTML, CSS, JavaScript, Java Server Pages, Java, Google App Engine, and Materialize framework.
					</p>
				</div>
			</div>
		</section>
		<section class="project background-green">
			<div class="container text-center">
				<h2 class="title">Steven Stocks</h2>
				<h4>Developer</h4>
				<a href="http://stevenliao.tech:8080/stevenstocks/" target="_blank">
					<img class="project-image" src="images/projects/StevenStocks.png" alt="Steven Stocks">
				</a>
				<div class="col-xs-6 col-xs-offset-3 margin">
					<p>
						This web application is designed to simulate a stock-trading system. The frontend is built with Java Server Pages and JavaScript, while the backend is built with Java, JDBC, and MySQL. With our simple interface, clients may easily navigate through this app to buy stocks, sell stocks, keep track of orders and stock price fluctuations.
					</p>
				</div>
			</div>
		</section>
	</div>
</main>
@stop