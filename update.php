<?php
$slau=mysql_connect("localhost","root","");
mysql_select_db("medical_db",$slau);


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
$strquery="UPDATE store_tbl SET name= '" . $_GET['name'] . "', mname= '". $_GET['mname'] ."', quantity= '". $_GET['quantity'] ."', uprice= '". $_GET['uprice'] ."', balance= '". $_GET['balance'] ."', bprice= '". $_GET['bprice'] ."', tprice= '". $_GET['tprice'] ."',rprice= '". $_GET['rprice'] ."' WHERE id='". $_GET['id'] ."' ";
$results=mysql_query ($strquery);


header ('location:view.php'); 

?>