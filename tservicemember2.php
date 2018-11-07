<html>
<head>
<style>
div.solid 
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
<div class = "solid">
    <h1>Provider Terminal</h1>
    <h2>>Service Member<</h2>
 <h2>>Validated<</h2>
        <form method="post" enctype="multipart/form-data" action="terminal.php">
        
		<p>Service Code: 
                <input type="text" name="service_code">
		<br>
		Service Date: 
                <input type="text" name="service_date">
		<br>
		Time spent with client: 
                <input type="text" name="service_date">
		<br>
		Comments: 
                <input type="text" name="service_date">
		<br>
	    <input type="submit" name="Submit" value="Submit">
        </form>
</div>
</center>
</body>