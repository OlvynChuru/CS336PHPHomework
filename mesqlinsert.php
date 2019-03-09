<?php
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	$link = mysqli_connect("localhost", "root", "", "methings");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$sqlselect = "SELECT * FROM direction";
	if($resultselect = mysqli_query($link, $sqlselect)){
		$numrows = mysqli_num_rows($resultselect) + 1;
		//mysqli_free_result($resultinsert);
		$sqlinsert = "insert  into `direction`(`id`,`title`,`type`,`currentFacingDirection`) values (" . $numrows .",'Pencil','Object','West');";
		if($resultinsert = mysqli_query($link, $sqlinsert)){
			//mysqli_free_result($resultinsert);
		
		}
		else{
			echo "ERROR: Was not able to execute $sqlinsert. " . mysqli_error($link);
		}
	} else{
	    echo "ERROR: Was not able to execute $sqlselect. " . mysqli_error($link);
	}
	 
	// Close connection
	mysqli_close($link);
	?>

