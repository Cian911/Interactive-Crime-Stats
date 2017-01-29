<?php

class ImportCSV {

  private $csv_file;
  private $start_row = 1;

  public function __construct( $csv_file ) {
    $this->csv_file = $csv_file;
  }

  public function parseCSVFile() {
    $csv_data = array_map('str_getcsv', file($this->csv_file, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES));
    
    // Remove first two elements
    unset($csv_data[0]);
    unset($csv_data[1]);

    // Re-index keys
    $csv_data = array_values($csv_data);

    foreach( $csv_data as &$data ) {
      if($data[0] === ' ') {
        unset($data[0]);
      }
      if($data[1] === ' ') {
        unset($data[1]);
      }
    }

    // Re-index multidiemensional array keys
    return $csv_data = array_map(create_function('$x','$k = key($x); return (is_numeric($k)) ? array_values($x) : $x;'), $csv_data);
  }

}