<?php 
	session_start();
	if(isset($_SESSION['uname'])){
		session_destroy();
        session_unset();     // unset $_SESSION variable for the run-time

		echo "<script> location.href='Home.html'</script>";
	}
	
?>