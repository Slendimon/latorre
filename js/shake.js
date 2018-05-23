<<<<<<< HEAD
!function(){var e=function(){var e,t=new Date,n=t.getHours(),o=t.getMinutes(),m=t.getSeconds(),d=t.getDay(),u=t.getDate(),a=t.getMonth(),r=t.getFullYear(),g=document.getElementById("horas"),i=document.getElementById("ampm"),s=document.getElementById("minutos"),c=document.getElementById("segundos"),l=document.getElementById("diaSemana"),y=document.getElementById("dia"),E=document.getElementById("mes"),I=document.getElementById("year");l.textContent=["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"][d],y.textContent=u;E.textContent=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"][a],I.textContent=r,n>=12?(n-=12,e="PM"):e="AM",0==n&&(n=12),g.textContent=n,i.textContent=e,o<10&&(o="0"+o),m<10&&(m="0"+m),s.textContent=o,c.textContent=m};e();setInterval(e,1e3)}();
=======
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
>>>>>>> 263a06cfd15139f8c73549f3a01eb19dcab8d141
