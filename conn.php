<?php
$teamname=$_POST['teamname'];
$projectname=$_POST['projectname'];
$courseid=$_POST['courseid'];
$teamid=$_POST['teamid'];
$StudentID=$_POST['studentid'];
$Studentname=$_POST['studentname'];
$conn=new mysqli('localhost','root','','Projects');

if($conn->connect_error)
{
	die('Connection Failed : ' .$conn->connect_error);
}
else
{
	$stmt1=$conn->prepare("insert into students(studentid,studentname,teamid,courseid) values(?,?,?,?)");
	$stmt1->bind_param("ssss",$StudentID,$Studentname,$teamid,$courseid) ;
	$stmt1->execute();
	
	$stmt2=$conn->prepare("insert into projectdetails(teamid,teamname,projectname) values(?,?,?)");
	$stmt2->bind_param("sss",$teamid,$teamname,$projectname);
	$stmt2->execute();
	/*
	$stmt2=$conn->prepare("insert into students(studentname,studentid) values(?,?)");
	$stmt2->bind_param("ss",$StudentID2,$Studentname2);
	$stmt2->execute();
	
	$stmt3=$conn->prepare("insert into students(studentname,studentid) values(?,?)");
	$stmt3->bind_param("ss",$StudentID3,$Studentname3);
	$stmt3->execute();
	*/
	echo "Students Information Recorded successfully";
	header ("Location:Choose.html");
	exit();
	$stmt1->close();
	$stmt2->close();
	//$stmt3->close();
	
	$conn->close();
}
?>