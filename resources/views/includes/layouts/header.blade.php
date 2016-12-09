<?php if (!isset($active_page)) $active_page = ""; ?>
<header class="background-darkGreen">
	<div class="container">
		<a href="/">
			<img class="logo-image" src="images/Logo.svg" alt="Steven Liao">
		</a>
		{!! navigation($active_page) !!}
	</div>
</header>