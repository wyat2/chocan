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

div.blue
    {
        background-color: #ADD8E6;
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

        <form method="post" enctype="multipart/form-data" action="admin.php">
			<div class = "solid">
				<h3>Administrator System</h3>
				<p>Login username: <sub><i> hint:admin</i></sub>
				<input type="text" name="login_user">
				<br>
				Login password: <sub><i> hint:1234</i></sub>
				<input type="password" name="login_password">
				<br>
				<input type="submit" name="Submit" value="Submit">
				</form>
			</div>
        
 <div class="blue">       
    <h3>Provider Terminal</h3>
    <form method="post" enctype="multipart/form-data" action="../terminal.php">
        
		<p>Provider ID: 
                <input type="text" name="provider_id">
		<br>
	    <input type="submit" name="Submit" value="Submit">
        </form>
 </div>
</center>
</body>