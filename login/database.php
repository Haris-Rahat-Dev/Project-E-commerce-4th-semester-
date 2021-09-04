<?php
define('DNS', 'mysql:host=localhost;dbname=e-commerce');
define('userName', 'root');
define('password', '');
define('Debugging', true);


class Database
{
    private function getPDOObj()
    {
        try {
            $db = new PDO(DNS, userName, password);
            $db->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            if (Debugging) {
                die("Error while connecting to the database: " . $e);
            } else {
                die("Error! Please try again.");
            }
        }
        return $db;
    }
    public function UDI($qry)
    {
        $pdo = $this->getPDOObj();
        return $pdo->exec($qry);
    }
    public function Search($qry, $classref)
    {
        $pdo = $this->getPDOObj();
        $result = $pdo->query($qry);
        if ($result->rowCount() > 0) {
            $row = $result->fetchAll(PDO::FETCH_CLASS, $classref);
            return $row;
        }
        return null;
    }
    public function rows($qry)
    {
        $pdo = $this->getPDOObj();
        $result=$pdo->query($qry);
        $row=$result->rowCount();
        if($row>0)
        {
            return $row;
        }
        else{
            return null;
        }
    }
/*    public function count($qry)
    {
        $pdo = $this->getPDOObj();
        $result=$pdo->query($qry);
        $row=$result->fetchAll(PDO::FETCH_ASSOC);
        return $row;

    }*/
}
