<html>
<form action= <?php echo $_SERVER['PHP_SELF']?> method = REQUEST>
NAME:<INPUT TYPE="TEXT" NAME="FNAME">
ROLLNO:<INPUT TYPE="TEXT" NAME="ROLLNO">
<INPUT TYPE="SUBMIT" NAME="SUBMIT">
</HTML>
<?php
	if(isset($_REQUEST['SUBMIT'])){
		echo "<br>";
		echo $_REQUEST['FNAME'];
	    echo $_REQUEST['ROLLNO'];}
	?>