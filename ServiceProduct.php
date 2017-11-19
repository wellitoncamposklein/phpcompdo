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
        $query = "update products set name = ?, descri = ? where id = ? ";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(1,$this->product->getName());
        $stmt->bindValue(2,$this->product->getDescri());
        $stmt->bindValue(3,$this->product->getId());
        $ret = $stmt->execute();

        return $ret;
    }

    public  function delete(int $id){
        $query = "delete from products where id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id",$id);
        $ret = $stmt->execute();

        return $ret;
    }

    public function find(int $id){
        $query = "select * from products where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id",$id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}