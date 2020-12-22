<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body{
		background: url(https://wallpaperaccess.com/full/124400.jpg) no-repeat;
		background-size: cover;
	}
	input{
		background-color: #008B8B;
		border-radius: 15px;
		text-align: center;
		color: white;
		font-size :20px;
		width :400px;
		height: 40px;
		margin-bottom: 20px;
		padding: 5px;
		margin-left: 36%;
		position: relative;
		top :3%;
		border : #000;
		transition: width 2s. height 4s;
	}
	h1{
		color: #008B8B;
		font-size:50px;
		margin-left: 38%;
	}
	.input: hover
	{	color:white;
		background-color: #3e8e41;
	}
</style>

<?php
session_start();
$name = $_GET['name'];
$usn = $_GET['usn'];


	echo "<h1>Welcome {$name}</h1>";

	echo "<a href = content.php?name={$name}&usn={$usn}><input type=button value='Submitted Projects' name='Submitted Projects'></a><br>";

	echo "<a href = 'form.html'><input type=button value='Submit a new project' name='Submit a new project'></a><br>";

	echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";

		
?>