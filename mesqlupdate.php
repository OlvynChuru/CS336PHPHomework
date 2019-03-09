<?php
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	$link = mysqli_connect("localhost", "root", "", "methings");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	$sqlupdate = "UPDATE freedombyname SET hasDemocraticOrPeoplesInOfficialName = 1 WHERE country = 'Greece'";

	// Greece's official name is supposedly the "Hellenic Republic," so I when I made this dataset I had
	// put Greece as one of the countries without "Democratic" or "People's" in its official name. But recently
	// I did some more research and I found that Greece's official name actually translates to "Hellenic Democracy"
	// (Greece is, after all, the place where the word "democracy" came from), so I'm changing it in the dataset.

	if($resultupdate = mysqli_query($link, $sqlupdate)){
	} else{
	    echo "ERROR: Was not able to execute $sqlupdate. " . mysqli_error($link);
	}
	 
	// Close connection
	mysqli_close($link);
	?>

