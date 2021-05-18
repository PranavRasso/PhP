<?php
class student{
	private $rollno,$name,$cls;
	function _construct($rollno,$name,$cls)
	{
		$this->rollno=$rollno;
		$this->name=$name;
		$this->cls=$cls;
	}
	function put_student()
	{
		printf("<tr> <td>%d</td><td>%s</td> %s</td></tr>".$this->rollno,$this->name,$this->cls);
	}
	function get_rollno()
	{
		return $this->rollno;
	}
	function get_name()
	{
		return $this->name;
	}
	function get_cls()
	{
		return $this->cls;
	}
}
$rollno= $_POST['txtrollno'];
$name= $_POST['txtname'];
$cls= $_POST['txtclass'];
$op= $_POST['op'];
switch($op)
{
	case 1:
	$fp=fopen("student.dat","a");
	$s=new student($code,$name,$class);
	$encode=serialize($s);
	fwrite($fp,$encode);
	fwrite($fp,"\n");
	fclose($fp);
	echo "Record saved successfully!";
	break;
	
	case 2:
	$fp=fopen("student.dat", "r");
	$records=array();
	while($encode= fgets($fp,200))
	{
		$s=unserialize($encode);
		$records[]=$s;
	}
	fclose($fp);
	$n=count($records);
	for($i=0; $i<$n-1 ; $i++)
	{
		for($j=0; $j<$n-1-$i ; $j++){
			$cmp=strcmp($records[$j]->get_name(),$records[$j+1]->get_name());
			if($cmp<0)
			{
				$t=$records[$j];
				$records[$j]=$records[$j+1];
				$records[$j+1]=$t;
			}
		}
	}
	echo "<table border=1>";
	echo "<tr><th>Rollno</th><th>Name</th><th>Class</th></tr>";
	for($i=0; $i<$n; $i++)
		$records[$i]->put_student();
	echo "</table>";
}
?>