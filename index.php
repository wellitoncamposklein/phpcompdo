<?php

try {
  $conn = new \PDO("mysql:host=localhost;dbname=test_00","root","123mudar");
} catch (\PDOException $e) {
  echo "Erro! Message: ".$e->getMessage()." Code: ".$e->getCode();
}
