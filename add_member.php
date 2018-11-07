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

<h1>ChocAn System</h1>
        <div class = "solid">
            <h3>Administrator System <sub><a href="../admin.php">Main Menu</a></sub></h3>
			<hr>
    <h3>Add Member</h3>
    <form method="post" enctype="multipart/form-data" action="../member_report.php">
        
		<p>Member ID <sub>9 digits</sub>: 
                <input type="number" name="member_id" >
		<br>
		   Name: 
                <input type="text" name="member_name">
		<br>
		   Email: 
                <input type="text" name="member_email">
		<br>
		   Status: 
                <input type="text" name="member_status">
		<br>
	    <input type="submit" name="Submit" value="Submit">
        </form>
 </div>
 
 </center>
 </body>
 </html>