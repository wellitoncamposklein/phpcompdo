<?php

try {
  $conn = new \PDO("mysql:host=localhost;dbname=test_00","root","123mudar");

  // $query = "select * from products";
  $query = "insert into products (name,descri) values('JS','JS in SON')";
  $rest = $conn->exec($query);
  print_r($rest);

} catch (\PDOException $e) {
  echo "Erro! Message: ".$e->getMessage()." Code: ".$e->getCode();
}
