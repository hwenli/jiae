<?php
	header("Access-Control-Allow-Origin:*");
	$username=$_REQUEST["username"];
	
	mysql_connect("localhost","root","root");
	mysql_select_db("jiae");
	$sql="SELECT count(*) FROM user where username='$username'";
	$result=mysql_query($sql);
	
	if($row=mysql_fetch_array($result)){
		if($row[0]==1)
			echo '{"status":0,"message":"exist"}';
		else
			echo '{"status":1,"message":"not exist"}';
	}else
		echo '{"status":2,"message":"error"}';
	
	mysql_close();
	?>