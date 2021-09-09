<?php 

interface DbConnectionInterface {
    public function connect();
} 
   
  class MySqlConnection implements DbConnectionInterface {
    public function connect() {}
  }
   
   
  class Post {
    public function __construct(DbConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
        $this->dbConnection->connect();
    }
  }

  $post = new Post(new MySqlConnection());

  print_r($post); 