<?php
session_start();
$qid=$_POST['qid'];
//echo $qid;
$ans=$_POST['ans'];
//echo $ans;
$email=$_SESSION['user'];
include("database.php");
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$pid=$row['0'];
}
$query2="insert into tbl_answer(ques_id,pat_id,answer,date) values ('$qid','$pid','$ans',curdate())";
mysql_query($query2);
header("Location:discussion.php");
?>