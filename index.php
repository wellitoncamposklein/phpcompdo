<?php

try {
    $con = new \PDO("mysql:host=localhost;dbname=teste","root","123mudar");
} catch (\PDOException $e) {
  echo "Error! Message: ".$e->getMessage()." Code: ".$e->getCode();
  exit;
}


 ?>
