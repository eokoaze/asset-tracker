<?php
//create connection
$conn = mysqli_connect('localhost','root','password','asset_tracker');
//check connection
if(!$conn){die("Connection error:" .mysqli_connect_error());}
?>
