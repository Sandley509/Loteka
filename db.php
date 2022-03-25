<?php 


// Host database

// $dbServername="localhost";
// $dbUsername="luckyvibe";
// $dbPassword="@123Modu#";
// $dbName="luckyvibe";




// Local Database
  $dbServername="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbName="loteka";
    $pdo=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

// Try and connect using the info above.

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Connection echouer: ' . mysqli_connect_error());
}else{
  echo"Connection succes";
}