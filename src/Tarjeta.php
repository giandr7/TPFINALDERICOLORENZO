<?php

namespace TPFINALDERICOLORENZO;

class Medium{
    protected $lineaVehiculo, $ID, $Hora, $Dia;
    
    public function __construct($a, $b, $c, $d) {
        $this->lineaVehiculo = $a;
        $this->ID = $b;
        $this->Hora = $c;
        $this->Dia = $d;
    }
}

class Tarjeta{
    protected $colectivo, $monto, $viajes_hechos, $Data, $plata, $vplus, $Bici;
    
    public function __construct($plata, $viajes_hechos) {
        $this->plata = 0;
        $this->viajes_hechos = 0;
        $this->vplus=0;
        $this->BiciQ = 0;
    }
    
    public function credito() {
        print("Su saldo (S.E.U.O): $" . $this->plata . ".\n");
    };

    public function viajes_tomados() {
        return $this->viajes_hechos;
    };
    
    public function viajes_plus($vplus){
        if($this->vplus=2){return 0;}
        $this->vplus = $this->vplus +1;
        return 0;
        
    };
    
    public function cobrar_vplus($cant){
        $this->plata = $this->plata - ($cant*8.50); 
    }

    public function salePlata_salePlata($monto) {
        if($monto == 332) {
            $this->plata = $this->plata+388;
            print("Costo carga: $".$this->monto." más un bonus de $56. Saldo (S.E.U.O): $".$this->plata."\n");
        }
        elseif($monto == 500) {
                $this->plata = $this->plata + 652;
                print("Costo carga: $".$this->monto." más un bonus de $140. Saldo (S.E.U.O): $".$this->plata."\n");
        }
        else{
            $this->plata = $this->plata+$monto;
            print("Costo carga: $".$this->monto." . Saldo (S.E.U.O): $".$this->plata."\n");
        }
        //Cargar credito restaura viajes plus.
        $this->vplus = 0;
        //Pagar luego de haber gastado los viajes plus te descuenta cant viajes plus + el tipo de viaje que pagas
        //Eso va a estar en el otro archivo. Acà entras vos Niaggi :*
        return 0;
    };
    
    public function retirarBici(Transporte $transporte) {
        if($this->BiciQ != $transporte->Dia) {
            $this->BiciQ = 0;
        }
        elseif($this->BiciQ = 0) {
            if($this->plata < 12.75) {echo "No se puede retirar la bicicleta.";}
            else {
                $this->plata = $this->plata - 12.75;
                if($this->vplus > 0){cobrar_vplus($this->vplus);}
                $this->BiciQ = $transporte->Dia;
            }
        }
        else {echo "Se ha retirado la bicicleta.}
    }; 
}
#BOI I MADE IT
