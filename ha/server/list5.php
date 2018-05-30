<?php
$number=$_GET["number"];
$no=$number+10;
include("coon.php");
$sql = "SELECT * FROM `ask`  LIMIT 0,{$no}";
$query=mysql_query($sql);

while($rs = mysql_fetch_array($query)) {
   
$output[]=array('id'=>$rs['id'],'title'=>$rs['title']);
}

 print_r(json_encode($output));				
					 


?>



