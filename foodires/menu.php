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

            if($row['food_category'] == "breakfast") {
                $bfast .= "<div class='parallax_item'>
				
							<a href='detail.php?fid=".$row['id']."'><img src='image/FoodPics/".$row['id'].".jpg' width='80px' height='80px' /> 
							<div class='detail'>
            }

        }


    }

    ?>