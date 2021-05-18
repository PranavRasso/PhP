<?php

if(is_dir(''))
{
	$handle=opendir('E:\NSGJAVA');
	while(($file=readdir($handle))!==false)
	{
		if(strpos($file,'.php',1)||strpos($file,'.class',1))
		{
			echo "$file<br/>";
		}
	}
}
//closedir($handle);
?>