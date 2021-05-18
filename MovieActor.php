<?php
//Step-1 Establish connection
	$con=pg_connect("host=localhost user=postgres dbname=movieactor password=password");
	if($con){
		$op=$_REQUEST['op'];
		switch($op){
			case 1:$actor= $_REQUEST['actor'];
			$result=pg_query("select mname,aname,year from movie,actor,actormovie where 
							movie.mno=actormovie.mno and actor.ano=actormovie.ano and aname='$actor'");
			if(!$result)
				echo "<br>Actor is not present!";
			else{
				while($row=pg_fetch_array($result)){
					echo "<br> Movie name: ".$row['mname'];
					echo "<br> Actor name: ".$row['aname'];
					echo "<br> Year: ".$row['year'];
				}
			}
			break;
			case 2:$mname=$_REQUEST['mname'];
					$year=$_REQUEST['year'];
					$aname=$_REQUEST['aname'];
					$budget=$_REQUEST['budget'];
					pg_query("insert into movie(mname,year) values ('$mname','$year')");
					pg_query("insert into actor(aname) values ('$aname')");
					$res1=pg_query("select mno from movie where mname='$mname'");
					$res2=pg_query("select ano from actor where aname='$aname'");
					$row1=pg_fetch_array($res1);
					$mno=$row1['mno'];
					$row2=pg_fetch_array($res2);
					$ano=$row2['ano'];
					pg_query("insert into actormovie values($mno,$ano,$budget)");
					break;
		}
	}else{
		echo "Database is not connected!";
	}
?>