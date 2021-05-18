<?php
//Step-1 Establishing Connection
	$con=pg_connect("host=localhost user=postgres password=password dbname=ty2020");
	if($con)
		echo "<br>database is connected!";
	else
		echo "<br> database is not connected!";
	
//Step-2 Execute query
	$result=pg_query("select * from employee");
	
//Step-3 Print Result
	echo "<table>";
	echo "<tr>";
		echo "<td>ID</td>";
		echo "<td>Name</td>";
		echo "<td>Salary</td>";
	echo "</tr>";
	/*while($row=pg_fetch_array($result)){
		echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['salary']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	//pg_fetch_object()
	/*while($obj=pg_fetch_object($result)){
		echo "<br>ID: ".$obj->id;
		echo "<br>Name: ".$obj->name;
		echo "<br>Salary: ".$obj->salary;
		echo "<br>";
	}*/
	
	//pg_fetch_assoc()
	while($aa=pg_fetch_assoc($result)){
		foreach($aa as $k=>$v)
		echo "<br>".$k." : ".$v;
		echo "<br>";
	}
	pg_close($con);
?>