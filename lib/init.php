<?php

require "import_csv.php";

$file = "../tests/files/raheny-stats.csv";
$importer = new ImportCSV($file);
$importer->parseCSVFile();