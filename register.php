<?php 

$username = $_POST['user'];
$usn = $_POST['usn'];
$pass = $_POST['pass'];

	$host = "localhost";
	$dbUsername = "root";
	$dbPassword="";
	$dbname="login";

	$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
	if($conn===FALSE)
		echo "not connected";
	else 
		echo "connection established"."<br>";

	$MAARI = "INSERT INTO `login`(`username`, `password`, `usn`) VALUES ('$username','$pass','$usn')";

	if(mysqli_query($conn,$MAARI))
	{
		echo "Your data has been added successfully";
		echo "<script>location.href='login.php'</script>";
	}
	else{
		echo "Error".mysqli_erroR($MAARI); 	
	}

mysqli_close($conn);

?>