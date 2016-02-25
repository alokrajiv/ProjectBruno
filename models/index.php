<?php

    require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';
    
    function sql_insert($table, $data){
        global $dbConn;
        $cols = "";
        $vals = [];
        foreach ($data as $key => $value) {
            $cols .= "`$key`,";
            $colsPhld .= " ? ,";
            array_push($vals, $value);
        }
        $cols = rtrim($cols, ', ');
        $colsPhld = rtrim($colsPhld, ', ');
        $vals = array_reverse($vals);
        var_dump($cols);
        var_dump($colsPhld);
        var_dump($vals);
        $sql = "
            INSERT INTO `$table` ($cols) 
            VALUES ( $colsPhld );
            ";
        $sth = $dbConn->prepare($sql);
        try{
            $sth->execute($vals);
            var_dump($sth);
            header('Location: addclient.php?done=success');
        } catch (PDOException $ex) {
            $messg = "FAILURE: ADD SQL INSERT in $table FAILED";
            logger($messg);
            die($messg);
        }
    }
    
    function sql_select($table, $data){
        global $dbConn;
        $cols = "";
        $vals = [];
        foreach ($data as $key => $value) {
            $cols .= "`$key`,";
            $colsPhld .= " ? ,";
            array_push($vals, $value);
        }
        $cols = rtrim($cols, ', ');
        $colsPhld = rtrim($colsPhld, ', ');
        $vals = array_reverse($vals);
        var_dump($cols);
        var_dump($colsPhld);
        var_dump($vals);
        $sql = "
            INSERT INTO `$table` ($cols) 
            VALUES ( $colsPhld );
            ";
        $sth = $dbConn->prepare($sql);
        try{
            $sth->execute($vals);
            var_dump($sth);
            header('Location: addclient.php?done=success');
        } catch (PDOException $ex) {
            $messg = "FAILURE: ADD SQL INSERT in $table FAILED";
            logger($messg);
            die($messg);
        }
        
    }
    
    function sql_update($table, $where, $data){
        global $dbConn;
        $cols = "";
        $vals = [];
        foreach ($data as $key => $value) {
            $cols .= "`$key`,";
            $colsPhld .= " ? ,";
            array_push($vals, $value);
        }
        $cols = rtrim($cols, ', ');
        $colsPhld = rtrim($colsPhld, ', ');
        $vals = array_reverse($vals);
        var_dump($cols);
        var_dump($colsPhld);
        var_dump($vals);
        $sql = "
            UPDATE `$table` 
            SET `company_name` = 'six1' 
            WHERE `client_id` = 11;
            

            INSERT INTO `$table` ($cols) 
            VALUES ( $colsPhld );
            ";
        $sth = $dbConn->prepare($sql);
        try{
            $sth->execute($vals);
            var_dump($sth);
            header('Location: addclient.php?done=success');
        } catch (PDOException $ex) {
            $messg = "FAILURE: ADD SQL INSERT in $table FAILED";
            logger($messg);
            die($messg);
        }
        
    }
    
    function sql_delete($table, $data){
        global $dbConn;
        
    }