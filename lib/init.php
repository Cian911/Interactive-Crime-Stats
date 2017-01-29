<?php

require "import_csv.php";

$file = "../tests/files/raheny-stats.csv";
$importer = new ImportCSV($file);
$csv_data = $importer->parseCSVFile();
$formatted_data = $importer->formatData($csv_data);

echo '<pre>';print_r( $formatted_data );echo '</pre>';