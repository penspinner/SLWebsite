@extends('includes/layouts/default')
@section('content')
<main>
	<section class="background-darkGreen">
		<div class="text-center container">
			<h1 class="margin">My Resume</h1>
			<iframe src="files/pdf/StevenLiao_Resume.pdf" style="width:100%;height:12in;">
			</iframe>
<!-- 			<object data="files/pdf/StevenLiao_Resume.pdf" type="application/pdf" style="width:100%;height:12in;">
				<embed src="files/pdf/StevenLiao_Resume.pdf" type="application/pdf" />
			</object> -->
		</div>
	</section>
</main>
@stop