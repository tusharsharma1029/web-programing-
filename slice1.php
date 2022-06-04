<html>
<?php
echo"Tushar Sharma<br>";
$a=array("hey"=>"h","hello"=>"h","red"=>"r","green"=>"g","yellow"=>"y");
$b=array("hello"=>"h","red"=>"r","green"=>"g");
array_splice($a,0,2,$b);
print_r($a);
?>
</html>
