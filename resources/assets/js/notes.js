var noteForm = $('.noteForm');
$('#noteOpen').on('click', function()
{
	noteForm.toggleClass('display');
});

$('#noteForm').on('submit', function()
{
	this.preventDefault();
	
});