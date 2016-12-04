$(document).ready(function()
{
	var projects = $('.projects section.project');
	$('#filterProjects').on('input', filterProjects);
	
	function filterProjects()
	{
		// Retrieve the value of the input field
		var value = this.value;
		
		// For each project, compare the title with the input value
		projects.each(function(i, e)
		{
			var title = $(e).find('.title').text();
			if (title.search(new RegExp(value, 'i')) > -1)
			{
				e.style.display = '';
			} else
			{
				e.style.display = 'none';
			}
		});
	}
});