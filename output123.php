<?php
$db = mysqli_connect("localhost","root","","projects");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>