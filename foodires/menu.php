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

            if ($row['food_category'] == "breakfast") {
                $bfast .= "<div class='parallax_item'>
				
							<a href='detail.php?fid=".$row['id']."'><img src='image/FoodPics/".$row['id'].".jpg' width='80px' height='80px' /> 
                            <div class='detail'>
                            <h4>".$row['food_name']."</h4>
								<p class='desc'>".substr($row['food_description'], 0, 40)."...</p>
                                <p class='price'>#".$row['food_price']."</p>
                                
                                </div>
							<p class='clear'></p>
							</a>
							
						</div>";
            } elseif ($row['food_category'] == "lunch") {
				
				$lunch .=	"<div class='parallax_item'>
				
							<a href='detail.php?fid=".$row['id']."'><img src='image/FoodPics/".$row['id'].".jpg' width='80px' height='80px' /> 
							<div class='detail'>
								
								<h4>".$row['food_name']."</h4>
								<p class='desc'>".substr($row['food_description'], 0, 40)."...</p>
								<p class='price'>#".$row['food_price']."</p>
								
							</div>
							<p class='clear'></p>
							</a>
							
						</div>";
				
			} elseif($row['food_category'] == "dinner") {
				
				$dinner .= "<div class='parallax_item'>
				
							<a href='detail.php?fid=".$row['id']."'><img src='image/FoodPics/".$row['id'].".jpg' width='80px' height='80px' /> 
							<div class='detail'>
								
								<h4>".$row['food_name']."</h4>
								<p class='desc'>".substr($row['food_description'], 0, 40)."...</p>
								<p class='price'>#".$row['food_price']."</p>
								
							</div>
							<p class='clear'></p>
							</a>
							
						</div>";
				
			} elseif($row['food_category'] == "special") {
				
				$special .= "<div class='parallax_item'>
				
							<a href='detail.php?fid=".$row['id']."'><img src='image/FoodPics/".$row['id'].".jpg' width='80px' height='80px' /> 
							<div class='detail'>
								
								<h4>".$row['food_name']."</h4>
								<p class='desc'>".substr($row['food_description'], 0, 40)."...</p>
								<p class='price'>#".$row['food_price']."</p>
								
							</div>
							<p class='clear'></p>
							</a>
							
						</div>";
				
			}

        }
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foodires</title>
    <link rel="stylesheet" href="css/main.css" />

<script src="js/jquery.min.js" ></script>

<script src="js/myscript.js"></script>
</head>
<body>
    <?php require "includes/header.php"; ?>

    <div class="parallax" onclick="remove_class()">
	
	<div class="parallax_head">
		
		<h2>Discover</h2>
		<h3>FOOD MENU</h3>
		
	</div>
	
</div>
</body>
</html>
    