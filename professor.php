<?php
$teamid=$_POST['teamid'];
$professorid=$_POST['professorid'];
$score=$_POST['score'];
$grades=$_POST['grades'];
$remarks=$_POST['remarks'];

$conn=new mysqli('localhost','root','','Projects');

if($conn->connect_error)
{
	die('Connection Failed : ' .$conn->connect_error);
}
else
{
	$stmt1=$conn->prepare("update projectdetails set grades = ? , score = ? , remarks = ? where teamid = ? and professorid = ?");
	$stmt1->bind_param("sssss",$grades,$score,$remarks,$teamid,$professorid) ;
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
	echo "Students Scores/Grades are Updated Successfully";
	header ("Location:Choose.html");
	exit();
	
	$stmt1->close();
	//$stmt2->close();
	//$stmt3->close();
	
	$conn->close();
}
?>