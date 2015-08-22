
var open = false;
document.getElementById('hamburger').onclick = function(){
	if(open)
	{
		document.getElementById('nav').style.display = 'none';
		open = false;
	}
	else
	{
		document.getElementById('nav').style.display = 'block';
		open = true;
	}
}