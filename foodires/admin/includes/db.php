<?php 
	
    $db = new mysqli("localhost", "root", "", "mfors");
    if($db->connect_errno) {
		
		echo "SORRY FOR INCONVENIENCE ! PLEASE COME BACK LATER WE ARE CURRENTLY UNDER MAINTENANCE";
		
	}

    ?>