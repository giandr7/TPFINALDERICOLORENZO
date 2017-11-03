<?php

namespace TPFINALDERICOLORENZO;
use PHPUnit\Framework\TestCase;

class TarjetaTest extends TestCase
{
  public function testviajes_plus()
  {
    $tarjeta = new Tarjeta();
    $tarjeta->viajes_plus();
    $this->assertEquals($tarjeta->vplus, 1);
  }
  
  public function testviajes_plus2()
  {
    $tarjeta = new Tarjeta();
    $tarjeta->viajes_plus();
    $tarjeta->viajes_plus();
    $this->assertEquals($tarjeta->vplus, 2);
  }
  
  public function testviajes_plus3()
  {
    $tarjeta = new Tarjeta();
    $tarjeta->viajes_plus();
    $tarjeta->viajes_plus();
    $tarjeta->viajes_plus();
    $this->assertEquals($tarjeta->vplus, 2);
  }
  
  public function testSaldo()
  {
    $tarjeta = new Tarjeta();
    $tarjeta->credito();
    $this->assertEquals($tarjeta->plata, 0);
  }
  
  public function testCViajeplus()
  {
    $tarjeta = new Tarjeta();
    $tarjeta->salePlata_salePlata(17);
    $tarjeta->vplus=2;
    $tarjeta->cobrar_vplus($tarjeta->vplus);
    $this->assertEquals($tarjeta->plata, 0);
  }
  
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
  
  public function testViajecito_Raja_aca_pibe()
  {
    $tarjeta = new Tarjeta();
    $C139 = new Medium(139,"Colectivo",0);
    $tarjeta->vplus=2;
    $tarjeta->subirseCole(0, $C139);
    $this->assertEquals($tarjeta->gg, 1);
  } 
  
   public function testViajecito()
  {
    $tarjeta = new Tarjeta();
    $C139 = new Medium(139,"Colectivo",0);
    $tarjeta->salePlata_salePlata(8.50);
    $tarjeta->subirseCole(0, $C139);
    $this->assertEquals($tarjeta->plata, 0);
  }
  
     public function testViajecitoNoTrans()
  {
    $tarjeta = new Tarjeta();
    $C139 = new Medium(139,"Colectivo",0);
    $tarjeta->salePlata_salePlata(2*8.50);
    $tarjeta->subirseCole(0, $C139);
    $tarjeta->subirseCole(0, $C139);
    $this->assertEquals($tarjeta->plata, 0);
  }
  
   public function testViajecitoEstudiantePechoPeludoEspaldaDePlata()
  {
    $tarjeta = new Tarjeta();
    $C139 = new Medium(139,"Colectivo",0);
    $tarjeta->salePlata_salePlata(4.25);
    $tarjeta->subirseCole(1, $C139);
    $this->assertEquals($tarjeta->plata, 0);
  }
  
   public function testViajecitoPlus()
  {
    $tarjeta = new Tarjeta();
    $C139 = new Medium(139,"Colectivo",0);
    $tarjeta->subirseCole(0, $C139);
    $this->assertEquals($tarjeta->vplus, 1);
  }
  
  public function testBici()
  {
    $tarjeta = new Tarjeta();
    $bici_bici = new Medium(1,"Bicicleta",0);
    $tarjeta->salePlata_salePlata(12.75);
    $tarjeta->retirarBici($bici_bici);
    $this->assertEquals($tarjeta->plata,0);
  }
  public function testBici2()
  {
    $tarjeta = new Tarjeta();
    $bici_bici = new Medium(1,"Bicicleta",0);
    $tarjeta->salePlata_salePlata(25.5);
    $tarjeta->retirarBici($bici_bici);
    $tarjeta->Thora = (1 + (24*60*60));
    $tarjeta->retirarBici($bici_bici);
    $this->assertEquals($tarjeta->plata,0);
  }
  public function testBici3()
  {
    $tarjeta = new Tarjeta();
    $bici_bici = new Medium(1,"Bicicleta",0);
    $tarjeta->salePlata_salePlata(25.5);
    $tarjeta->retirarBici($bici_bici);
    $tarjeta->retirarBici($bici_bici);
    $this->assertEquals($tarjeta->plata,12.75);
  }
  public function testBici4()
  {
    $tarjeta = new Tarjeta();
    $bici_bici = new Medium(1,"Bicicleta",0);
    $tarjeta->salePlata_salePlata(2);
    $tarjeta->retirarBici($bici_bici);
    $this->assertEquals($tarjeta->plata,2);
  }
  public function testTransbordo()
  {
    $tarjeta = new Tarjeta();
    $C139 = new Medium(139,"Colectivo",0);
    $C136 = new Medium(136,"Colectivo",0);
    $tarjeta->salePlata_salePlata(2*8.50);
    $tarjeta->subirseCole(0, $C139);
    $tarjeta->subirseCole(0, $C136);
    $this->assertEquals($tarjeta->plata,((2*8.50)-($tarjeta->normal+$tarjeta->normalT)));   
  }
    public function testTransbordoMedio()
  {
   $tarjeta = new Tarjeta();
    $C139 = new Medium(139,"Colectivo");
    $C136 = new Medium(136,"Colectivo");
    $tarjeta->salePlata_salePlata(2*8.50);
    $tarjeta->subirseCole(1, $C139);
    $tarjeta->subirseCole(1, $C136);
    $this->assertEquals($tarjeta->plata,((2*8.50)-($tarjeta->estudiante+$tarjeta->estudianteT)));
  }
  public function testTransbordoMedioNoPlata()
  {
   $tarjeta = new Tarjeta();
    $C139 = new Medium(139,"Colectivo");
    $C136 = new Medium(136,"Colectivo");
    $tarjeta->subirseCole(0, $C139);
    $tarjeta->subirseCole(0, $C136);
    $this->assertEquals($tarjeta->vplus,2);
  }
  public function testTransbordoNormalNoPlata()
  {
   $tarjeta = new Tarjeta();
    $C139 = new Medium(139,"Colectivo");
    $C136 = new Medium(136,"Colectivo");
    $tarjeta->subirseCole(1, $C139);
    $tarjeta->subirseCole(1, $C136);
    $this->assertEquals($tarjeta->vplus,2);
  }
}
