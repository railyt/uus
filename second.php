<?php

	$age=5;
	if ($age<18)
	{echo "alaealine";
		}else{
			echo "täisealine";
			}


?>

<br>

<?php

	// http://php.net/manual/en/function.date.php
	//saab märkmeid teha
	
	for($i=0; $i<=$age; $i=$i+1) {
		
		echo $i. "palju ";
	}

	echo "õnne";

?>

<br>
<?php

	echo date("l d.m.y z ");






?>

