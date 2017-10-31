<?php

namespace TPFINALDERICOLORENZO;

use PHPUnit\Framework\TestCase;

class TarjetaTest extends TestCase
{
  public function testSalePlata()
  {
    $tarjeta = new Tarjeta();
    salePlata_salePlata(500);
    $this->assertEquals($Tarjeta->plata(), 652);
  }
}
