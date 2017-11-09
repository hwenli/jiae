<?php
	$spimg=$_REQUEST['spimg'];
	$spname=$_REQUEST['spname'];
	$spprice=$_REQUEST['spprice'];
	
	mysql_connect("localhost","root","root");
	mysql_select_db("jiae");
	
	$sql="insert into sp(spimg,spname,spprice) value ('$spimg','$spname','$spprice')";
	$result=mysql_query($sql);
	if($result){
		echo '{"status":1, "message":"success"}';
	} else {
		echo '{"status":0, "message":"failed"}';
	}
	
	mysql_close();
?>