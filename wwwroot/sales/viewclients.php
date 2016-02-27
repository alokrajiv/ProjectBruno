<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>ERP-Dashboard</title>
		
	<!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/spacelab/bootstrap.min.css" rel="stylesheet" integrity="sha384-PpvUDg6Tgcp6nh5chOo8teebMjoOXeU/PVfbPIRL4dymXdX1LuGS8ZpBUUqjDZ0d" crossorigin="anonymous">
	<!--Jquery Plugin-->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/dashboard.js"></script>

	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
<?php

    require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';
    $sql = "
            SELECT * FROM `client_details` WHERE `sales_relation_id` = ? AND `status_code` = ?;
            ";
    $sth = $dbConn->prepare($sql);
    $sth->execute(array($_SESSION['cached_user_data']['user_id'], 0));
    $res = $sth->fetchAll(PDO::FETCH_ASSOC);
    echo '<table id="clients_table" class="table table-striped table-bordered"><tr><th>Client Name</th><th>ACTION-1</th></tr>';
    foreach ($res as $client) {
        $id = $client['client_id'];
        $name = $client['company_name'];
        echo "<tr><td>$name</td><td><form method='post' action='order_step1.php'><input type='hidden' name='client_id' value='$id'><button type='subimt'>NEW ORDER</button></form></td></tr>";
    }
    echo '</table>';
    ?></body></html>
