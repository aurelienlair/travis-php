<?php

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    private $pdo;
    private $vehiclesAdapter;

    public function setUp()
    {
        $this->pdo = new \PDO(
            $GLOBALS['db_dsn'], 
            $GLOBALS['db_username'], 
            $GLOBALS['db_password']
        );
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->vehiclesAdapter = new VehiclesAdapter($this->pdo);
    }

    public function testCountVehiclesByColor()
    {
        $this->assertEquals(2, $this->vehiclesAdapter->countByColor('Red'));
        $vehiclesAdapter = new VehiclesAdapter($this->pdo);
    }
}
