<?php

class ServiceProduct
{
    private $db;
    private $product;

    public function __construct(IConn $db, IProduct $product)
    {
        $this->db = $db->connect();
        $this->product = $product;
    }

    public function lista(){
        $query = "select * from products";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save(){
        $query = "insert into products (name,descri) values (:name,:descri) ";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":name",$this->product->getName());
        $stmt->bindValue(":descri",$this->product->getDescri());
        $stmt->execute();

        return $this->db->lastInsertId();
    }

    public function update(){

    }

    public  function delete(){

    }
}