<?php
session_start();
if(isset($_SESSION['sesuname']) && isset($_SESSION['sespword'])){
	unset($_SESSION['sesuname']);
	unset($_SESSION['sespword']);

	if(session_destroy()){
		header('location:../index.php');	
	}else{
		echo'Error logging you out';
		}
}else{
	header('location:../index.php');
}
?>