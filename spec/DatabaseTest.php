<?php

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    private $pdo;

    public function setUp()
    {
        $this->pdo = new \PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function testCountVehiclesByColor()
    {
        $vehiclesAdapter = new VehiclesAdapter($this->pdo);
        $this->assertEquals(3, $vehiclesAdapter->countByColor('red'));
    }
}
