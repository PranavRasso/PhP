<?php
	//Step-1 Establish the Connection
	$con=mysqli_connect("localhost","root","");//host,user,password
	if($con)
		echo "Database is connected!";
	else
		echo "Database is not connected!";
	
	mysqli_select_db($con,"ty2020");//database name
	
	//Step-2 Run Query
	$result=mysqli_query($con,"select * from student");
	//mysqli_query($con,"delete from student where stid=103");
	//mysqli_query($con,"insert into student values (104,'Mady',93)");
	//mysqli_query($con,"update student set stmks=79.4 where stid=102");
	
	//Step-3 Print Result
	while($row=mysqli_fetch_array($result)){
		echo "<br> Roll No.: ".$row['stid'];
		echo "<br> Name: ".$row['stname'];
		echo "<br> Marks:".$row['stmks'];
		echo "<br>";
	}
?>
	