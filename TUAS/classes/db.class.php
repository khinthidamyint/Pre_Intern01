<?php
  class Db {
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $dbName = 'admission';

    protected function connect() {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
      $pdo = new PDO($dsn, $this->user, $this->pwd);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

      // $query = "insert into test(fname, lname, age, school) values ('khin','myint','33','cu')";
      // $connect = exec($query);
      // echo 'New Record Inserted';
      return $pdo;
    }

    protected function disconnect(){
      $pdo = null;
    }

  }
