<?php

    require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';
    
    require_once BASE_DIR."models/clients.php";
    
    $data['company_name'] = $_POST['company_name'];
    $data['phone_no'] = $_POST['phone_no'];
    $data['fax_no'] = $_POST['fax_no'];
    $data['email'] = $_POST['email'];
    $data['address'] = $_POST['address'];
    $data['owner'] = $_POST['owner'];
    create_client($data);