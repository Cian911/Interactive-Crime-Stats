<?php

require "configuration.php";
require "model/database.php";

$db = new Database();

if( isset($_POST) && $_POST['action'] == 'request' ) {
  handleAjaxRequest( $_POST );
}

function handleAjaxRequest( $data ) {
  global $db;

  $json_data = $db->selectAll();
  echo json_encode( $json_data );
  exit();  
}