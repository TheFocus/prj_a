

<?php 
	$connect = mysql_connect('localhost','root') or die (mysql_error());

?>


<form method="post" action="register.php">
    <input type="text" name="username" /><br />
    <input type="password" name="password" /><br />
    <input type="password" name="r_password" /><br />
    <input type="submit" name="submit" value="Register" />
</form>
