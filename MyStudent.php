<?php
	$id= $_REQUEST['id'];
	$db=mysqli_connect("localhost","root","");//host,user,password
	if($db){
		echo "Database is Connected!";
		mysqli_select_db($db,"ty2020");
		mysqli_query($db,"insert into student values(102,'Arun',88.3)");
		echo "<br> After insertion:";
		$result=mysqli_query($db,"select * from student");
		
		echo "<table>";
		echo "<tr>";
			echo"<th>ID</th>";
			echo"<th>NAME</th>";
			echo"<th>MARKS</th>";
		echo"</tr>";
		
		while($row=mysqli_fetch_array($result)){
			echo"<tr>";
			echo"<td>".$row['stid']."</td>";
			echo"<td>".$row['stname']."</td>";
			echo"<td>".$row['stmks']."</td>";
			echo"</tr>";
		}
		echo"</table>";
		
	}else
		echo "<br>Database is not connected!"
?>