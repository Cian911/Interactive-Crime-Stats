<?php

class ImportCSV {

  private $csv_file;
  private $start_row = 1;

  public function __construct( $csv_file ) {
    $this->csv_file = $csv_file;
  }

  public function parseCSVFile() {
    $csv_data = array_map('str_getcsv', file($this->csv_file, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES));

    echo '<pre>';print_r( $csv_data );echo '</pre>';
  }

}