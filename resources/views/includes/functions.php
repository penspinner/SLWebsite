<?php

	function navigation($active_page = "home")
	{
		$pages = array("resume", "projects", "contact");
		
		$output = "<nav class=\"background-green navbar\">";
		$output .= "<ul>";
		foreach ($pages as $page)
		{
			$output .= "<li><a ";
			if ($page == $active_page) 
				$output .= "class=\"active\"";
			if ($page == "home")
				$output .= "href=\"/\">";
			else 
				$output .= "href=\"/{$page}\">";
			$output .= ucwords($page);
			$output .= "</a></li>";
		}
		$output .= "</ul>";
		$output .= "</nav>";
		return $output;
	}

?>