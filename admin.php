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
    
</style>
</head>
<body>
<center>
    
            
<?php 
 
 $fellow = $_POST['login_user'];
 $mylogin = $_POST['login_password'];

$servername = "localhost";
$username = "rusty063_csadmin";
$password = "Test12345!";
$database = "rusty063_chocan";



$mysqli = new mysqli('localhost', $username, $password, $database);
$mysqli->select_db($database) or die( "Unable to select database");

echo 'Database Connected successfully';
?>

<h1>ChocAn System</h1>
        <div class = "solid">
            <h3>Administrator System <sub><a href="../admin.php">Main Menu</a></sub></h3>
            
            <p align="left"><a href ="../add_member.php">1. Add Member </a>
            <br>2. Add Provider
            <br>3. Edit Member
            <br>4. Edit Provider
            <br>5. Weekly Summary Report
            <br><a href ="../member_report.php">6. Member Report</a>
            <br>7. Weekly Provider Report
            <br>8. EFT Report
            <br>9. <a href = "../index.php">Exit</a>
</p>
</div>
<?php 
mysqli_close($mysqli);
?>
