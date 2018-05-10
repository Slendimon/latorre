//JavaScript Document

function showError(inputname,msg)
{
	var element=$(inputname).addClass('shaker');
	$('h2').html(msg);
	setTimeout(function()
	{
		element.removeClass('shaker');
	},1000);
}

$(document).on('click','#btnCheck',function()
{
	if($('#txtuser').val()=="")
	{
		showError('#txtuser','Debes ingresar un nombre de usuario.');
	}
	else if($('#txtpass').val()=="")
	{
		showError('#txtpass','Debes ingresar una contraseña.');
	}
	else
	{
		$('h2').html("Well Done!!");
		$('form').hide();
	}
	return false;
});