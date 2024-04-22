<?php 
$conn = mysqli_connect( 
	"localhost", "root", "", "Persons"); 
		
// Check connection 
if (mysqli_connect_errno()) { 
	echo "Database connection failed."; 
} 

// Check for error in query 
if (!mysqli_query($link, "SET Firstname='Arkadyuti'")) { 
	printf("Error message: %s\n", mysqli_error()); 
}	 

mysqli_close($conn); 
?> 
