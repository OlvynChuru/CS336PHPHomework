<?php
$link = mysqli_connect("localhost", "root", "root", "demo");
// It says, "Warning: mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) in C:\xampp\htdocs\dashboard\mecomments.php on line 2"
// Is "root" the username? What is "demo"? It doesn't appear anywhere else in the error messages or in this code.
// And how does it know that it's using the password "YES"? That password doesn't appear anywhere in this code.
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}//                                             ^
//                                              |
// This appears to produce the message "Access denied for user 'root'@'localhost' (using password: YES)"


// This is weird. Neither of these messages appear on the page.
// Perhaps the "die" command made the script stop running, so it didn't get to this point.
$sql = "INSERT INTO persons (first_name, last_name, email_address) VALUES ('Wormy', 'VonWormenstein', 'email@email.com')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// This looks like it was supposed to insert another person into a database.

// If the script stopped running, does that mean that mysqli didn't close, so it's still open?
mysqli_close($link);
?>

