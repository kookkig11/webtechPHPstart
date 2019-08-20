<?php

namespace App\Framework\Connection;

use PDO;

class DB
{
    protected $pdo;

    public function queryFirst($sql, array $params = null)
    {
        // prepare >> execute >> fetch
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    // array object
    public function queryAll($sql, array $params = null)
    {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}