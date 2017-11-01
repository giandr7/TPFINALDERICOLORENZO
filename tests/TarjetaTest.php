<?php

namespace TPFINALDERICOLORENZO;
use PHPUnit\Framework\TestCase;

class TarjetaTest extends TestCase
{
  public function testSalePlata1()
  {
    $tarjeta = new Tarjeta();
    $tarjeta->salePlata_salePlata(500);
    $this->assertEquals($tarjeta->plata, 652);
  }
  
   public function testSalePlata2()
  {
    $tarjeta = new Tarjeta();
    $tarjeta->salePlata_salePlata(332);
    $this->assertEquals($tarjeta->plata, 388);
  }
  
   public function testSalePlata3()
  {
    $tarjeta = new Tarjeta();
    $tarjeta->salePlata_salePlata(50);
    $this->assertEquals($tarjeta->plata, 50);
  }
  
   public function testViajecito()
  {
    $tarjeta = new Tarjeta();
    $C139 = new Medium(139,"Colectivo",0);
    $tarjeta->salePlata_salePlata(8.50);
    $tarjeta->subirseCole(0, $C139);
    $this->assertEquals($tarjeta->plata, 0);
  }
}
