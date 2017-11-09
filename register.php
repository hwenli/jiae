<?php
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$passwd=$_REQUEST['passwd'];
	
	mysql_connect("localhost","root","root");
	mysql_select_db("jiae");
	
	$sql="insert into user(username,password,passwd) value ('$username','$password','$passwd')";
	$result=mysql_query($sql);
	if($result){
		echo '{"status":1, "message":"success"}';
	} else {
		echo '{"status":0, "message":"failed"}';
	}
	
	mysql_close();
	?>