<?php
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	$link = mysqli_connect("localhost", "root", "", "methings");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM direction";
	if($result = mysqli_query($link, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        echo "<table>";
	            echo "<tr>";
	                echo "<th>title</th>";
	                echo "<th>type</th>";
	                echo "<th>currentFacingDirection</th>";
	            echo "</tr>";
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['title'] . "</td>";
	                echo "<td>" . $row['type'] . "</td>";
	                echo "<td>" . $row['currentFacingDirection'] . "</td>";
	            echo "</tr>";
	        }
	        echo "</table>";
	        mysqli_free_result($result);
	    } else{
	        echo "No humans or objects matching your query were found.";
	    }
	} else{
	    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
	}
	 
	// Close connection
	mysqli_close($link);
	?>

