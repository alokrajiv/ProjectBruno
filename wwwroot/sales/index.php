<?php
    session_start();
?>
<html>
<style>
	div.left {
		width: 20%; 
		padding: 5% 0 0 5%;
		float: left;
	}
</style>
<title>
	DASHBOARD
</title>	
<h1>
	<center>
		COMPANY NAME
	</center>
</h1>
<head>
	<center>DASHBOARD</center>
	<p align="right"><a href="/logout.php">Logout</a></p>
</head>
        
	<div class="left">
            Welcome <?= $_SESSION['cached_user_data']['username']?>,
            <br><br>
		<form action="addclient.php" align="center">
			<input type="submit" value="ADD CLIENT" style="width: 100%;" >
		</form>
		<form action="viewclients.php" align="center">
			<input type="submit" value="EXISTING CUSTOMER" style="width: 100%;">
		</form>
	</div>
</html>