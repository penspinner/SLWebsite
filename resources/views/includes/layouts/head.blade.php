<?php
	if (!isset($title)) 			$title = "OP";
	if (!isset($stylesheets)) $stylesheets = array();
	if (!isset($extscripts))	$extscripts = array();
	if (!isset($extras))			$extras = "";
?>

<head>
	<meta charset="UTF-8">
<!-- 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
	<meta name="description" content="Steven Liao is a computer science graduate from Stony Brook University.">
	<meta name="keywords" content="Steven Liao, Stony Brook University, software engineer, web developer, software developer, New York City, NYC, resume, full stack developer, hacker, OP ">
	<title><?php echo $title;?></title>
	<link rel="icon" type="image/png" href="images/Rubiks-cube-256.png">
	<link rel="manifest" href="/manifest.json">
	
	@foreach($stylesheets as $stylesheet)
		{!! "<link rel='stylesheet' type='text/css' href='" . $stylesheet . "'>" !!}
	@endforeach
	
	<script src="/js/site.js"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	<?php
		foreach ($extscripts as $extscript)
		{
			echo "<script src=\"" . $extscript . "\"></script>";
		}
	?>
	
	@foreach($extscripts as $extscript)
		{!! "<script src='" . $extscript . "'></script>" !!}
	@endforeach
	
	{!! $extras !!}
</head>
