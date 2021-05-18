<html>
<form method="post">
	<body>
		Enter the directory name:<input type="text" name="dir" placeholder="directory name here">
		<br>
		<input type="submit" name="SUBMIT"><br>
		<?php
		if(isset($_POST['dir']))
		{
			$dir=$_POST['dir'];
			if(is_dir($dir))
			{
				if($handle=opendir($dir))
				{
				while (($file=readdir($handle))!==false) 
				{
					echo "$file <br>";
					closedir($handle);
				}
			}
			}
		}
		?>
	</body>
</form>
</html>