<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "ServiceProduct.php";

$db = new Conn("localhost","test_00","root","123mudar");
$product = new Product;
$product->setName("Laravel")
        ->setDescri("Laravel in SON");

$service = new ServiceProduct($db,$product);

print_r($service->save());
print_r($service->lista());