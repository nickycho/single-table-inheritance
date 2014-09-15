<?php

namespace Nanigans\SingleTableInheritance\Tests\Fixtures;

class MotorVehicle extends Vehicle {

  protected static $singleTableSubclasses = [
    'Nanigans\SingleTableInheritance\Tests\Fixtures\Car',
    'Nanigans\SingleTableInheritance\Tests\Fixtures\Truck'
  ];
}