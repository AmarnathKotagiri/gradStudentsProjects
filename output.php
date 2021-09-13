<html>
<head>
<br><br>
  <title>Display all records from Database</title>
</head>
<body>
<h2>Students Score Details</h2>
<table class="center" border="2">
  <tr>
    <td>Teamid</td>
    <td>Teamname</td>
    <td>Projectname</td>
	<td>Studentname</td>
    <td>StudentID</td>
    <td>CourseID</td>
    <td>Coursename</td>
	<td>Score</td>
	<td>Grades</td>
	<td>Remarks</td>
	</tr>
<?php
include "output123.php"; // Using database connection file here
	$records = mysqli_query($db,"Select * from students s Inner join courses c on s.courseid = c.courseid Inner join projectdetails pd on s.teamid = pd.teamid Inner join professors p on s.courseid = p.courseid"); // fetch data from database
//Select pd.teamid, pd.teamname, pd.projectname, s.studentname, s.studentid, s.courseid, c.coursename from students s Inner join courses c on s.courseid = c.courseid Inner join projectdetails pd on s.teamid = pd.teamid Inner join professors p on s.courseid = p.courseid
//select teamid, teamname, projectname, studentname, studentid, courseid, coursename from (
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Teamid']; ?></td>
	<td><?php echo $data['Teamname']; ?></td>
	<td><?php echo $data['Projectname']; ?></td>
	<td><?php echo $data['Studentname']; ?></td>
    <td><?php echo $data['StudentID']; ?></td>
	<td><?php echo $data['CourseID']; ?></td>
	<td><?php echo $data['Coursename']; ?></td>
	<td><?php echo $data['Score']; ?></td>
	<td><?php echo $data['Grades']; ?></td>
	<td><?php echo $data['Remarks']; ?></td>
  </tr>	
<?php
}
?>
</table>
<br><br>
<input type="button" onclick="window.location.href='aggregate.php';" value="Back to Aggregate Page" style="margin-left: 43%; width: 200px; " /> 

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
  margin-top: 100px;
  
 
  
}
 h2 {
	margin : 0;
	padding : 0 0 20px;
	text-align:center;
	font-size:22px;
	}
	body{
	margin : 0 ;
	padding : 0 ;
	background : url(BackGround3.JPG);
	background-size : cover ;
	background-position : top ;
	font-family : sans-serif;
}
</style>
<?php mysqli_close($db); // Close connection ?>
</body>
</html>