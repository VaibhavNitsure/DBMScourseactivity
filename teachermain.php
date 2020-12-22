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
		padding: 10px 0px;
	}
	tr{background-color :#eee;
		padding: 5px 5px;
	}
	td{
		margin: 5px;
		margin-left: 10px;
		text-align: left;
		padding: 5px 60px;
	}

	</style>
<table>
	<tr>
		<th>Name</th>
		<th>USN</th>
		<th>guide</th>
		<th>Title</th>
		<th>link</th>
		<th>email</th>
	</tr>
<?php

session_start();

$user = $_GET['name'];
$pass = $_GET['usn'];

	$conn = mysqli_connect("localhost","root","","projectdata");
	$sql = "SELECT `Name`, `USN`, `branch`, `div`, `title`, `guide`, `start`, `end`, `exp`, `link`,`email`,`marks` FROM `projects` WHERE guide='{$user}'";
	$result = $conn-> query($sql);

	if ($result-> num_rows > 0) {
		echo "<table>";
		while ($row = $result-> fetch_assoc()) {
			?>
				<form action="teachermain.php" method="POST"></form>
				<tr>
						<td><?php echo $row["Name"]; ?><br></td>
						<td><?php echo $row["USN"]; ?> <br></td>
						<td><?php echo $row["guide"]; ?> <br></td>
						<td><?php echo $row["title"]; ?> <br></td>
						<td><?php echo $row['link']; ?> <br></td>
						<td><?php echo $row['email']; ?> <br></td>
						<td>
							<button onclick = <?php mail($row['email'],'Marks','Hello'.$row['Name'].'. Your project '.$row['title'].' is evaluated.','From: sihfarmer@gmail.com');mail('sihfarmer@gmail.com','Marks','Hello'.$user.'. You evaluated project '.$row['title'],'From: sihfarmer@gmail.com');?>>Send confirmation mail</button>
					</td>
				</tr>

					<?php

		}
		

		echo "</table>";
		echo "<br><a href='loginteacher.php'><input type=button value=login name=login></a>";
	}
	else{
		echo "0 result";

	}

	$conn-> close();

?>
</table>
</center>

