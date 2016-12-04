@extends('old/includes/layouts/default')
@section('content')
	<!-- Main content of the resume page -->
	<main id="content">
		<article>
			<h2>QTI Website Redesign<span class="right">July - August 2016</span></h2>
			<hr class="thick_line">
			<p class="description">
				Redesigned Quarterhorse Technology Inc's website to be more viewport-responsive and mobile
				adaptive.
			</p>
			<p style="width:25%;" class="right"><a class="ext_link right" target="_blank" href="/~108607000/final">View Website</a></p>
		</article>
		<br>
		
		<article>
			<h2>Handball Scorekeeper<span class="right">May 2016</span></h2>
			<hr class="thick_line">
			<p class="description">
				I thought of this app on my own because I play handball and have always seen referees
				keeping the stats and score a handball match on paper. So in order to ease their responsibility,
				I created this web app that allows anyone to scorekeep handball matches and then save it.
				As long as the user does not clear the cache, whenever the user goes back onto this app,
				the user will still have the handball matches stored on the app.
			</p>
			<p style="width:25%;" class="right"><a class="ext_link right" target="_blank" href="hbsk">View Application</a></p>
		</article>
		<br>
		
		<article>
			<h2>Digital Conceptions<span class="right">Spring 2016</span></h2>
			<hr class="thick_line">
			<p class="description">
				Have you ever wanted to read comics AND have the ability to create comics online? Well, here you go. Digital Conceptions 
				allows the public to read and create comics for the world to see.
			</p>
			<p style="width:25%;" class="right"><a class="ext_link right" target="_blank" href="http://digital-conceptions-6.appspot.com/">View Website</a></p>
		</article>
		<br>

		<article>
			<h2>Steven Stocks<span class="right">Spring 2016</span></h2>
			<hr class="thick_line">
			<p class="description">
				This web application is designed to simulate a stock-trading system. The frontend is built with Java Server Pages and JavaScript, 
				while the backend is built with Java, JDBC, and MySQL. With our simple interface, clients may easily navigate through this app to 
				buy stocks, sell stocks, keep track of orders and stock price fluctuations.<br>
				&#9733; <strong>My team won 1st place in the course project competition.</strong>
			</p>
			<p style="width:25%;" class="right"><a class="ext_link right" target="_blank" href="http://stevenliao.tech:8080/stevenstocks">View Application</a></p>
			<button id="steven_stocks_button" class="btn">View certificate</button>
			<div id="cse305_certificate" style="display:none;">
				<img style="max-width:960px;" width="100%" src="/images/CSE305_Certificate.png" alt="Certificate.png">
			</div>
		</article>
		<br>
		
		<article>
			<h2>Tree Model Simulation<span class="right">Spring 2016</span></h2>
			<hr class="thick_line">
			<p class="description">
				Written in C++ with Open GL, this program simulates a model of a tree based on input image(s) of a tree.
			</p>
			<p style="width:25%;" class="right"><a class="ext_link right" target="_blank">View Source Code</a></p>
			<button id="steven_stocks_button" class="btn">More</button>
		</article>
		<br>
		
		<article>
			<h2>Handball Scoring iOS App<span class="right">Fall 2014</span></h2>
			<hr class="thick_line">
			<p class="description">
				This app is allows handball players to keep track of score during games and save scores.<br>
			</p>
			<p style="width:25%;" class="right"><a class="ext_link right" target="_blank" href="https://github.com/Penspinner/HandballScore">View Source Code</a></p>
			<button id="handball_button" class="btn">Show images</button>
			<div id="handball_app_images" style="display:none;">
				<img width="49.5%" src="/images/HB_Main.png" alt="Handball.png">
				<img width="49.5%" src="/images/HB_TableView.png" alt="Handball.png">
			</div>
		</article>
		<br>
		
		<br>
		<p>
			Web project ideas:
			<ul>
				<li><del>Handball scoring to allow people to keep track of scores and save their game stats.</del></li>	
			</ul>
		</p>
<!-- 		<iframe width="100%" height="480" src="https://www.youtube.com/embed/oHg5SJYRHA0?autoplay=1&vq=tiny)" frameborder="0" allowfullscreen></iframe> -->
	</main>
@stop