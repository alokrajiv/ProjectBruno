<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';

require_once 'index.php';

function create_client($data){
    
    sql_insert('client_details', $data);
    
}

function read_client($data){
    
    sql_select('client_details', $data);
    
}
function update_client($data){
    
    sql_update('client_details', $data);
    
}
function delete_client($data){
    
    sql_delete('client_details', $data);
    
}