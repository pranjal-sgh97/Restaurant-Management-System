<?php 
	
	session_start();
	require "includes/db.php";
    require "includes/functions.php";
    if(isset($_SESSION['user'])) {
        header("location: food_list.php");
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['submit'])) {
            $user = escape($_POST['username']);
			$pass = md5($_POST['password']);
        }
    }

    ?>