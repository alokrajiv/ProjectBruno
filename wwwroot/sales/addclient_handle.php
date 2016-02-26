<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';

// Fetch values from POST

$company_name = $_POST['compname'];
$company_phone_no = $_POST['phno'];
$company_fax_no = $_POST['faxnumber'];
$company_email = $_POST['compemail'];
$company_address = $_POST['compaddress'];
$owner = $_POST['owner'];
$point_of_contacts = $_POST['poc'];

// Insert values into client_details
$dbConn->beginTransaction();

$query = "INSERT INTO client_details (company_name, phone_no, fax_no, email, address, owner) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $dbConn->prepare($query);

$stmt->execute(array($company_name, $company_phone_no, $company_fax_no, $company_email, $company_address, $owner));


// If the insert was successful
if($stmt->rowCount() == 1){
    $client_id = $dbConn->lastInsertId('client_id');
    
    // Now if we have point of contacts, then add them to the DB for the given client_id
    if(sizeof($point_of_contacts) > 0){
        foreach($point_of_contacts as $poc){
            $name = $poc['name'];
            $designation = $poc['designation'];
            $email = $poc['email'];
            $mobile_no = $poc['mobile'];
            $office_no = $poc['office'];
            
            $query = "INSERT INTO point_of_contact (client_id, name, email, designation, mobile_no, office_no) VALUES (?, ?, ?, ?, ?, ?)";
            $st = $dbConn->prepare($query);
            
            $st->execute(array($client_id, $name, $email, $designation, $mobile_no, $office_no));
        }
    }
}

else
    echo "Request Failed!! Client couldn't be added!!";

// commit
$dbConn->commit();

var_dump($_POST);
