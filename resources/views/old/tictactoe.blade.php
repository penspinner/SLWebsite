@extends('old/includes/layouts/default')
@section('content')
	<script src="../old/js/TicTacToe.js"></script>
	<!-- Main content of the resume page -->
	<main id="content">
		<canvas id="canvas" width="300" height="300"></canvas>
		<div>
			<br><span id="player_status"></span>
			<br><span id="game_status"></span>
			<br><span id="current_wins"></span>
		</div>
	</main>
@stop
