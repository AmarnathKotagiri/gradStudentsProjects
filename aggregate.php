<html>
<head>
<br><br>
  <title>Display all records from Database</title>
</head>
<body>
<h2>Students Score Aggregation Details</h2>


<table class="center" border="2">
  <tr>
    <td>Max_Score</td>
    <td>Min_Score</td>
	<td>Avg_Score</td>

	</tr>
<?php
include "output123.php"; // Using database connection file here
	$records = mysqli_query($db,"select max(Score) as max_score,min(Score) as min_score,avg(score) as avg_score from projectdetails"); // fetch data from database

//select ProfessorID, sum(Score) from projectdetails group by ProfessorID


while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['max_score']; ?></td>
	<td><?php echo $data['min_score']; ?></td>
	<td><?php echo $data['avg_score']; ?></td>

  </tr>	
<?php
}
?>
</table>
<br><br>
<!input class="center" type="button" onclick="window.location.href='output.php';" value="Back to ScoreCard " style="margin-left: 43%; width: 200px; " /> 
<input type="button" onclick="window.location.href='output.php';" value="Back to ScoreCard " style="margin-left: 43%; width: 200px; " /> 

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
  margin-top: 140px;
  
 
  
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

	
#btn{  
	
font-size: 25px;  
	
} 
</div>
<font face ="Arial" size="20px" color="orange">
</style>
<?php mysqli_close($db); // Close connection ?>
 
	
	
</div>
</body>
</html>