<center>
<style>
	table{
		border-collapse : collapse;

		width: 80%;
		transform:translate(0%,50%);
		color: rgb(0,0,0);
		font-family:monospace;
		font-size:20px;
		text-align:left;
		background: none;
	}
	input{
		margin: 300px;
	}
	th{
		background-color: rgb(0, 0, 255);
		color:white;
		padding: 10px 20px;
	}
	tr{background-color :#eee;
		padding: 5px 20px;
	}
	td{
		text-align: center;
		padding: 5px 5px;
	}

	</style>
<table>
	<tr>
		<th>Name</th>
		<th>USN</th>
		<th>Title</th>
		<th>guide</th>
		<p></p><br>
	</tr>
<?php
	echo "<table>";

session_start();

$user = $_GET['name'];
$pass = $_GET['usn'];

	$conn = mysqli_connect("localhost","root","","projectdata");
	$sql = "SELECT `Name`, `USN`, `branch`, `div`, `title`, `guide`, `start`, `end`, `exp`, `link` FROM `projects` WHERE (Name='{$user}'and USN='{$pass}')";
	$result = $conn-> query($sql);

	if ($result-> num_rows > 0) {
		echo "<table>";
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td> ". $row["Name"] . " <br></td><td> ". $row["USN"] . " <br></td><td> " . $row["title"] . " <br></td><td> " . $row["guide"] . " <br></td><tr> ";
		}

		echo "</table>";
		echo "<br><a href='process.php?name=$user&usn=$pass'><input type=button value=Home name=Home></a>";
	}
	else{
		echo "0 result";

	}

	$conn-> close();

?>
</table>
</center>
