<?php

class Database extends PDO {

  public function __construct() {
    parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
  }

  /**
  * @param $data
  * Expected in array format 
  */
  public function insert( $data ) {
    $query = $this->prepare("INSERT INTO stats (region, year, crime, number_of_offences)
      VALUES (:region, :year, :crime, :number_of_offences)");
    $result = $query->execute(array(
      ':region'   => $data['region'],
      ':year'   => $data['year'],
      ':crime'   => $data['crime'],
      ':number_of_offences'   => $data['number_of_offences'],
    ));

    if( $result ) {
      echo 'Insert Done.';
    } else {
      echo '<pre>';print_r( $this->errorInfo() );echo '</pre>';
    }
  }

  public function selectAll() {
    $query = $this->prepare("SELECT * FROM stats");
    $result = $query->execute();

    if( $result ) {
      return $data = $query->fetchAll();
    }
  }

  public function selectByYear( $year ) {
    $query = $this->prepare("SELECT * FROM stats WHERE year = {$year}");
    $result = $query->execute();

    if( $result ) {
      return $data = $query->fetchAll();
    }
  }

  public function selectByCrime( $crime ) {
    $query = $this->prepare("SELECT * FROM stats WHERE crime = {$crime}");
    $result = $query->execute();

    if( $result ) {
      return $data = $query->fetchAll();
    }
  }

  public function selectByRegion( $region ) {
    $query = $this->prepare("SELECT * FROM stats WHERE region = {$region}");
    $result = $query->execute();

    if( $result ) {
      return $data = $query->fetchAll();
    }
  }

  public function delete() {
    $query = $this->prepare("DELETE FROM stats");
    $result = $query->execute();

    if( $result ) {
      return 'Deleted.';
    } 
  }

}