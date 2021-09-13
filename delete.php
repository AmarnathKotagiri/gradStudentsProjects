<?php
$studentid=$_POST['studentid'];


$conn=new mysqli('localhost','root','','Projects');

if($conn->connect_error)
{
	die('Connection Failed : ' .$conn->connect_error);
}
else
{
	$stmt1=$conn->prepare("delete from students where studentid = ?");
	$stmt1->bind_param("s",$studentid) ;
	$stmt1->execute();
	/*
	$stmt2=$conn->prepare("insert into projectdetails(teamid,teamname,projectname) values(?,?,?)");
	$stmt2->bind_param("sss",$teamid,$teamname,$projectname);
	$stmt2->execute();
	
	$stmt2=$conn->prepare("insert into students(studentname,studentid) values(?,?)");
	$stmt2->bind_param("ss",$StudentID2,$Studentname2);
	$stmt2->execute();
	
	$stmt3=$conn->prepare("insert into students(studentname,studentid) values(?,?)");
	$stmt3->bind_param("ss",$StudentID3,$Studentname3);
	$stmt3->execute();
	*/
	echo "Students Information has been Deleted ";
	
	header ("Location:professor.html");
	exit();
	$stmt1->close();
	//$stmt2->close();
	//$stmt3->close();
	
	$conn->close();
}
?>