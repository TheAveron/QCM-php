function color()
{
	location=window.location
	main = document.getElementById("body").classList;

	function replace_href(el1,el2)
	{
		window.location=window.location.href.replace(el1, el2);
	}

	if (location.href.indexOf('theme')==-1)
	{
		location=location.href+="?theme=light_mode";
	}
	else if (main.contains('light_mode'))
	{
		replace_href('light', 'dark');
	}
	else
	{
		replace_href('dark','light');
	}
}