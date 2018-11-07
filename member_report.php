 <html>
<head>
<style>
div.solid 
    {
        background-color: hotpink;
        width:300px;
        margin: auto;
        border: 3px solid black;
        border-radius: 5px;
    }
div.report 
    {
        background-color: white;
        text-align: left;
		padding-left: 3px;
    }
    
</style>
</head>
<body>
<center>
    
<!-- Database connection    -->
<?php 

$servername = "localhost";
$username = "rusty063_csadmin";
$password = "Test12345!";
$database = "rusty063_chocan";



$mysqli = new mysqli('localhost', $username, $password, $database);
$mysqli->select_db($database) or die( "Unable to select database");

echo 'Database Connected successfully<br>';

$m_id = $_POST['member_id'];
$m_name = $_POST['member_name'];
$m_email = $_POST['member_email'];
$m_status = $_POST['member_status'];


$sql = "INSERT INTO members(member_id, name, email, status)
		VALUES($m_id, '$m_name', '$m_email', '$m_status')";
		
if($mysqli->query($sql) === TRUE)
{
	echo "New record added successfully<br>SQL : " . $sql;
}

?>		

			<h1>ChocAn System</h1>
<div class = "solid">
            <h3>Administrator System <sub><a href="../admin.php">Main Menu</a></sub></h3>
            <hr>
			<h3>Member Report</h3>
	<div class = "report">
	<?php
		$sql = "SELECT * FROM members";
		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) 
		{
		// output data of each row
		echo "\tID\t| Name\t| Email\t| Status <br>";
			while($row = $result->fetch_assoc()) 
			{
				echo "<br>". $row["member_id"]. "\t| ". $row["name"]. "\t| " . $row["email"] . "\t| " . $row["status"];
			}
		} 
		else 
			{
				echo "0 results";
			}
	?>
	</div>
</div>
<?php 
mysqli_close($mysqli);
?>

</center>
 </body>
 </html>