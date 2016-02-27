<?php


  require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';
  session_start();
  
  $data['client_id'] = $_POST['client_id'];
  $data['inventory_id'] = $_POST['inventory_id'];
  $data['search_item_color'] = $_POST['search_item_color'];
  $data['search_item_width'] = $_POST['search_item_width'];
  $data['search_item_material'] = $_POST['search_item_material'];
  
  require_once __DIR__.'/order_func.php';
  
  insertOrder($data);
  
  header('Location: /sales/?success_messg=Success%21&success_note=Requested+new+order+for+your+client%21%21');