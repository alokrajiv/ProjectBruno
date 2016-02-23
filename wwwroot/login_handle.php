<?php

    require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';
    
    $candidate_username=$_POST['username'];
    $candidate_password=$_POST['password'];
    $sql = "
            SELECT * FROM `user_cred` WHERE `username` LIKE ? LIMIT 1
            ";
    $sth = $dbConn->prepare($sql);
    $sth->execute(array( $candidate_username ));
    $res = $sth->fetch();
    $passwordHash = $res["pswrd_hash"];
    if (password_verify($candidate_password, $passwordHash)) {
        echo 'Password is valid!';
        if (!(session_status() == PHP_SESSION_NONE)) {
            session_destroy();
        }
        session_start();
        $_SESSION['cached_users_data']['username']= $candidate_username;
    } else {
        echo 'Invalid password.';
    }