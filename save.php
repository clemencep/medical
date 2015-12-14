<?php
//connect to the data base
$sql=mysql_connect("localhost","root","") or die("server not find");
mysql_select_db("medical_db",$sql) or die("database not find");

//inting into the table
$id=$_POST['id'];
$aa=$_POST['name'];
$ab=$_POST['mname'];
$ac=$_POST['quantity'];
$ad=$_POST['uprice'];
$ae=$_POST['balance'];
$af=$_POST['bprice'];
$ag=$_POST['tprice'];
$ai=$_POST['rprice'];
$ac-=$ae;
$af=$ae*$ad;
$ag=$ad*$ac;
$ai=$ag-$af;

$msg="insert into store_tbl(id,name,mname,quantity,uprice,balance,bprice,tprice,rprice)value('$id','$aa','$ab','$ac','$ad','$ae','$af','$ag','$ai')";
$result=mysql_query($msg);
if($result)
{
echo "your message has been received succefully";
}
else
{
echo "your message failled to be send,try again";
}

header( 'Location:view.php' );
?>