<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';

/* Functions for handling Orders */

/**
* Returns a list of materials for the given item from the inventory
* @param $inventory_id - refers to the id of an entry in the inventory_main table (DB)
* @return - returns an assoc array of materials
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
* Returns a list of widths for the given item from the inventory
* @param $inventory_id - refers to the id of an entry in the inventory_main table (DB)
* @return - returns an assoc array of widths
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
* Returns a list of colors for the given item from the inventory
* @param $inventory_id - refers to the id of an entry in the inventory_main table (DB)
* @return - returns an assoc array of colors
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