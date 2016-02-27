<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';

/* Functions for handling Orders */

/**
* Returns a list of 
* @param $inventory_id - refers to the id of an entry in the inventory_main
* @return - returns an assoc array of 
*/
function getMaterials($inventory_id){
    global $dbConn;
    
    $query = "SELECT * FROM inventory_material WHERE inventory_id = ?";
    
    $stmt = $dbConn->prepare($query);
    
    $stmt->execute(array($inventory_id));
    
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $results;
}


/**
* Returns a list of 
* @param $inventory_id - refers to the id of an entry in the inventory_main
* @return - returns an assoc array of 
*/
function getWidths($inventory_id){
    global $dbConn;
    
    $query = "SELECT * FROM inventory_width WHERE inventory_id = ?";
    
    $stmt = $dbConn->prepare($query);
    
    $stmt->execute(array($inventory_id));
    
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $results;
}


/**
* Returns a list of 
* @param $inventory_id - refers to the id of an entry in the inventory_main
* @return - returns an assoc array of 
*/
function getColors($inventory_id){
    global $dbConn;
    
    $query = "SELECT * FROM inventory_color WHERE inventory_id = ?";
    
    $stmt = $dbConn->prepare($query);
    
    $stmt->execute(array($inventory_id));
    
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $results;
}

?>