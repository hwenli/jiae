<?php
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	mysql_connect('localhost','root','root');
	mysql_select_db('jiae');
	$sql='select * from user';
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result))
	{
		if($user==$row['username'] && $pass==$row['password']){
			echo 1;
			setcookie("User",$user);
		}
	}

	mysql_close();
?>