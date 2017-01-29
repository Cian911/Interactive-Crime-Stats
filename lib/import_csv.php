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

    // Remove empty string values in array
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

  public function formatData( $csv_data ) {
    $region = explode(',', $csv_data[1][0]);
    $year = $csv_data[0][0];

    unset($csv_data[0]);
    unset($csv_data[1]);
    $csv_data = array_values($csv_data);

    $import_data = array();

    foreach( $csv_data as $import ) {
      $import_data[] = array(
        'year'                => $year,
        'region'              => $region[0],
        'crime'               => substr($import[0], 4),
        'number_of_offences'  => $import[1]
      );
    }

    return $import_data;
  }

  public function getCSVFile() {
    return $this->csv_file;
  }

  public function setCSVFile( $file ) {
    $this->csv_file = $file;
  }

}