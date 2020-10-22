<?php 
	
	session_start();
	require "admin/includes/functions.php";
    require "admin/includes/db.php";

    $bfast = "";
	$lunch = "";
	$dinner = "";
    $special = "";
    
    $get_recent = $db->query("SELECT * FROM food");

    if($get_recent->num_rows) {
        while ($rows = $get_recent -> fetch_assoc()) {

        }


    }

    ?>