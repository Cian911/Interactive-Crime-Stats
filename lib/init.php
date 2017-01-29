<?php

require "configuration.php";
require "import_csv.php";
require "model/database.php";

$db = new Database();

$file = "tests/files/raheny-stats.csv";
$importer = new ImportCSV($file);
$csv_data = $importer->parseCSVFile();
$formatted_data = $importer->formatData($csv_data);
json_encode($formatted_data);

global $formatted_data;

// Delete existing data
// $db->delete();

// Insert data
// foreach( $formatted_data as $data ) {
//   $db->insert( $data );
// }