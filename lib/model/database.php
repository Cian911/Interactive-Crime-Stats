<?php

class Database extends PDO {

  protected function __construct() {
    parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
  }

  /**
  * @param $data
  * Expected in array format 
  */
  protected function insert( $data ) {
    $query = $this->prepare("INSERT INTO stats (region, year, crime, number_of_offences)
      VALUES ({$data['region']}, {$data['year']}, {$data['crime']}, {$data['number_of_offences']})");
    $result = $query->execute();
  }

  protected function selectAll() {
    $query = $this->prepare("SELECT * FROM stats");
    $result = $query->execute();

    if( $result ) {
      return $data = $query->fetchAll();
    }
  }

  protected function selectByYear( $year ) {
    $query = $this->prepare("SELECT * FROM stats WHERE year = {$year}");
    $result = $query->execute();

    if( $result ) {
      return $data = $query->fetchAll();
    }
  }

  protected function selectByCrime( $crime ) {
    $query = $this->prepare("SELECT * FROM stats WHERE crime = {$crime}");
    $result = $query->execute();

    if( $result ) {
      return $data = $query->fetchAll();
    }
  }

  protected function selectByRegion( $region ) {
    $query = $this->prepare("SELECT * FROM stats WHERE region = {$region}");
    $result = $query->execute();

    if( $result ) {
      return $data = $query->fetchAll();
    }
  }

}