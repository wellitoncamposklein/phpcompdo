<?php

class Product implements IProduct
{
    private $id;
    private $name;
    private $descri;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getDescri()
    {
        return $this->descri;
    }

    public function setDescri($descri)
    {
        $this->descri = $descri;
        return $this;
    }


}