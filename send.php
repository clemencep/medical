<?php
//connect to the data base
$sql=mysql_connect("localhost","root","") or die("server not find");
mysql_select_db("medical_db",$sql) or die("database not find");

//inting into the table
$id=$_POST['id'];
$aa=$_POST['name'];
$ab=$_POST['email'];
$ac=$_POST['tel'];
$ad=$_POST['message'];

$msg="insert into contact_tbl(id,name,email,tel,message)value('$id','$aa','$ab','$ac','$ad')";
$result=mysql_query($msg);
if($result)
{
echo "your message has been received succefully";
}
else
{
echo "your message failled to be send,try again";
}

header( 'Location:contact.html' );
?>