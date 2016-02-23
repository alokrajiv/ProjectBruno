<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';

$NEW_USER_DATA['passwd_clrtxt'] = $_POST['new_password'];
$NEW_USER_DATA['username'] = $_POST['username'];
$NEW_USER_DATA['role'] = $_POST['role'];
if(!in_array($NEW_USER_DATA['role'], explode(",", USER_ROLE))){
    $messg = "FAILURE: USER ROLE INPUT NOT FOUND IN REGISTER";
    logger($messg);
    die($messg);
}
$options = [
    'cost' => 11,
];
$NEW_USER_DATA['passwd_hash'] = password_hash($NEW_USER_DATA['passwd_clrtxt'], PASSWORD_BCRYPT, $options);

$sql = "
        INSERT INTO `user_cred` (`username`, `pswrd_hash`, `ROLE`, `modified_time`) 
        VALUES ( ? , ? , ?, NOW());
        ";
$sth = $dbConn->prepare($sql);
try{
    $sth->execute(array( $NEW_USER_DATA['username'], $NEW_USER_DATA['passwd_hash'], $NEW_USER_DATA['role']));
    var_dump($sth);
    header('Location: login.php');
} catch (PDOException $ex) {
    $messg = "FAILURE: REGISTRATION SQL INSERT FAILED";
    logger($messg);
    die($messg);
}

