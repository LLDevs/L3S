<?php
// Define configuration
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "cyber");
define("DB_NAME", "ald_sys");

class Database extends PDO {
  private $host     = DB_HOST;
  private $user     = DB_USER;
  private $pass     = DB_PASS;
  private $dbname   = DB_NAME;

  public function __construct() {
    //SET DSN
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    //CREATE PDO INSTANCE
    try {
      parent::__construct($dsn, $this->user, $this->pass);
    }
    //CATCH ERRORS
    catch(PDOException $e) {
      echo $e->getMessage();
    }
  }
}
