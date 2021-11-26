<?php
namespace Core\Database;

use PDO;
use PDOException;

class QueryBuilder
{



    public function __construct(protected PDO $pdo)
    {
        //
    }

    public function all($table)
    {
        $prepare = $this->pdo->prepare("select * from {$table}");
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_CLASS);
    }

    public function create($table,array $parameter)
    {
        $sql =  sprintf(
            'INSERT INTO %s (%s) values (%s)',
            $table,
            implode(', ',array_keys($parameter)),
            implode(', ',array_map(fn($item) => ":{$item}" , array_keys($parameter)))
        );

        try {
            $prepare = $this->pdo->prepare($sql);
            $prepare->execute($parameter);
        } catch(PDOException $e) {
            die($e->getMessage());
        }

    }
}