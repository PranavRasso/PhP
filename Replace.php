<?php

$c1=$_POST['c1'];
$c2=$_POST['c2'];
echo "Concatenated String is: ",$c1.$c2,"<br>";

$ss1=$_POST['ss1'];
$ss2=$_POST['ss2'];
if(strstr($ss1,$ss2)==true)
	echo "$ss2 is found in $ss1 <br>";
else 
	echo "$ss2 is not present in $ss1<br>";

$r1=$_POST['r1'];
$pos=$_POST['pos'];
$r2=$_POST['r2'];
for($i=0;$i<strlen($r2);$i++)
{
	$r1[$i+$pos]=$r2[$i];
}
echo "Replaced String is: $r1<br>";
?>