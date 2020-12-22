<body>
<center>
<style>
	body{
		background: url(https://wallpaperaccess.com/full/124400.jpg) no-repeat;
		background-size: cover;
	}
	h1{
		color: #008B8B;
		text-align: center;
		font-family: monospace;
	}
	input{
		background-color: #008B8B;
		border-radius: 15px;
		color: white;
		font-size :20px;
		width :200px;
		height: 40px;
		margin-bottom: 20px;
		padding: 2px;
		top :3%;
		border : #000;
		transition: width 2s. height 4s;
	}
</style>

<?php 
session_start();
$name = $_POST['full_name'];
$usn_no = $_POST['usn_no'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$div = $_POST['division'];
$pname = $_POST['project_name'];
$guide = $_POST['project_guide'];
$start = $_POST['start_date'];
$endd = $_POST['end_date'];
$exp = $_POST['project_exp'];
$link = $_POST['project_link'];


	$host = "localhost";
	$dbUsername = "root";
	$dbPassword="";
	$dbname="projectdata";

	$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
	if($conn===FALSE)
		echo "not connected";
	//else 
		//echo "connection established"."<br>";

	$MAARI = "INSERT INTO `projects`(`Name`, `USN`, `branch`, `div`, `title`, `guide`, `start`, `end`, `exp`, `link`,`email`) VALUES ('$name','$usn_no','$branch','$div','$pname','$guide','$start','$endd','$exp','$link','$email')";

	if(mysqli_query($conn,$MAARI))
	{
		echo "<h1>Project submitted</h1>";
		echo "<br><a href='process.php?name=$name&usn=$usn_no'><input type=button value=Home name=Home></a>";
	}
	else{
		echo "Error".mysqli_erroR($conn); 	
	}

mysqli_close($conn);


?>
</body>
</center>