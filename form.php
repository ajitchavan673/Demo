<?php

$state=$_GET['state'];
$c1=array('Select city','Ahmednagar','Satara','Baramati','pune','mumbai');
$c2=array('Select city','Kollam','Thrisur','tiruanantpuram');
$c3=array('Select city','delhi');
$c4=array('Select city','Patana');
$c5=array('Select city','jaipur');


if($state=="Maharashtra")
{
	foreach ($c1 as $c) {
		echo"<option>$c</option>";
	}
}

elseif ($state=="Bihar")
{
	foreach ($c4 as $c) {
		echo"<option>$c</option>";	
	}
}

elseif ($state=="Delhi") {
	foreach ($c3 as $c) {
		echo"<option>$c</option>";
	}
}

elseif ($state=="Kerala") {
	foreach ($c2 as $c) {
		echo"<option>$c</option>";
	}
}

elseif ($state=="Rajsthan") {
	foreach ($c5 as $c) {
		echo"<option>$c</option>";
	}
}

else{
	echo"<option>First Select State</option>";
}
?>
