<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $capacityStorage;
    private int $cargo = 0;

    public function __construct(int $capacityStorage, int $cargo, string $color, int $nbSeats)
    {
       parent::__construct($color, $nbSeats);
        $this->setCapacityStorage($capacityStorage);
        $this->setCargo($cargo);
    }


    public function getCapacityStorage(): int
    {
        return $this->capacityStorage;
    }

    public function setCapacityStorage(int $capacityStorage): void
    {
        $this->capacityStorage = $capacityStorage;
    }

    public function getCargo(): int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo): void
    {
        $this->cargo = $cargo;
    }
    public function fullOrInFilling(): string
    {
        if ($this->fullOrInFilling =$this->getCapacityStorage()){
            return "truck is full";
        } else {
            return 'The truck is in filling';
        }
    }


}