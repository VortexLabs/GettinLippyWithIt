
var open = false;
document.getElementById('hamburger').onclick = function(){
	if(open)
	{
		document.getElementById('hide').style.display = 'none';
		open = false;
	}
	else
	{
		document.getElementById('hide').style.display = 'block ';
		open = true;
	}
}