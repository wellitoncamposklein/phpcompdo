<?php
/**
 * Created by IntelliJ IDEA.
 * User: welliton
 * Date: 18/11/17
 * Time: 23:45
 */

class Conn implements IConn
{
    private $host;
    private $dbname;
    private $user;
    private $pass;

    public function __construct($host,$dbname,$user,$pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect(){
        try {
            return new \PDO("mysql:host={$this->host};dbname={$this->dbname}",
            $this->user,
            $this->pass);

            //--------------------------------------------------
            #SQL inject
//            $query = "select * from products where id=:id";
//            $stmt = $conn->prepare($query);
//            $stmt->bindValue(':id',$_GET['id']);
//            $stmt->execute();
//
//            print_r($stmt->fetchAll());
//----------------------------------------------------

        } catch (\PDOException $e) {
            echo "Erro! Message: ".$e->getMessage()." Code: ".$e->getCode();
            exit;
        }
    }
}