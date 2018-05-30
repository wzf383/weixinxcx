<?php
//数据库链接
$dbname = 'test';
$host = "localhost";

$user = "root";
$pwd = "wx09b21251e9ba3bea";
/*接着调用mysql_connect()连接服务器*/
$link = mysql_connect("localhost",$user,$pwd);
if(!$link) {
	die("Connect Server Failed: " . mysql_error($link));
}
/*连接成功后立即调用mysql_select_db()选中需要连接的数据库*/
if(!mysql_select_db($dbname,$link)) {
	die("Select Database Failed: " . mysql_error($link));
	}
	 


?>



