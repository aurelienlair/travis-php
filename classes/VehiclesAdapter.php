<?php

class VehiclesAdapter
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }    

    public function countByColor($color)
    {
        $sql = "SELECT count(1) FROM vehicle WHERE color = " . $this->pdo->quote($color);
        $stmt = $this->pdo->query($sql);
        return count($stmt->fetchColumn());
    }
}
