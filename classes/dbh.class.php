<?php

class Dbh {
  private $host = "loclahost";
  private $user = "root";
  private $pass = "";
  private $name = "product-list";

  protected function connect() {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name;
    $pdo = new PDO($dsn, $this->user, $this->pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}