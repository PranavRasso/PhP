<!DOCTYPE html>
<html>
<form method="post" action="as3b2.php">
<head>
	<title>File with extension only!</title>
	Enter the directory name:<input type="text" name="dir" placeholder="name"><br><br>
	Enter the Extension:<input type="text" name="ext" placeholder="ext"><br><br>
	<input type="submit" name="submit">
</head>
<body>
	<?php
	if((isset($_POST['dir']))||(isset($_POST['ext'])))
	{
	$dir=$_POST['dir'];
	$ext=$_POST['ext'];
	if(is_dir($dir))
	{
		if($handle=opendir($dir))
		{
			while(($file=readdir($handle))!==false)
			{
				if(strpos($file,$ext)!==false)
				{
					echo "<pre>";
					echo "$file";
					//unlink($file);
					echo "</pre>";
				}
			}
		}
	}
}
?>
</body>
</html>