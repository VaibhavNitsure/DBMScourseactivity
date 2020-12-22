

<?php 

session_start();

$username = $_POST['user'];
$password = $_POST['pass'];
$usn = $_POST['usn'];


	$host = "localhost";
	$dbUsername = "root";
	$dbPassword="";
	$dbname="login";

	$con = mysqli_connect($host,$dbUsername,$dbPassword);
	mysqli_select_db($con,$dbname);
 
if(isset($_POST['user'])){

	$sql="SELECT * FROM login WHERE username='$username' AND password='$password'LIMIT 1";

	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result)==1){
		echo "You have logged in";
		echo "<script>location.href='process.php?name=$username&usn=$usn'</script>";
	}

}
	else{
		echo "<script>alert('username or password incorrect!')</script>";

		echo "<script>location.href='login.php'</script>";
	}

mysqli_close($con);


?>