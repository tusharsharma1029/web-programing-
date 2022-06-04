<html>
<?php
echo"Tushar Sharma<br>";
function myfunction()
{
	static $x=10;
	
	$x++;
	echo"$x<br>";

}
myfunction();
myfunction();
myfunction();
?>
</html>