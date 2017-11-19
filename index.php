<?php

try {
  $conn = new \PDO("mysql:host=localhost;dbname=test_00","root","123mudar");

  $query = "select * from products where id={$_GET['id']}";
  // $query = "insert into products (name,descri) values('JS','JS in SON')";
  foreach ($conn->query($query) as $product) {
    echo $product['name']."<br/>";
    echo $product['descri']."<br/>";
  }


} catch (\PDOException $e) {
  echo "Erro! Message: ".$e->getMessage()." Code: ".$e->getCode();
}
