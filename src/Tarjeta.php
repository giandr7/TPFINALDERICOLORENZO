<?php

namespace TPFINALDERICOLORENZO;

class Tarjeta{
    protected $colectivo, $monto, $viajes_hechos, $Data, $plata;
    public function credito() {
        print("Su saldo actual es de $" . $this-> . ".\n");
    };

    public function viajes_tomados() {
        return $this->viajes_hechos;
    };
}

    public function salePlata_salePlata($monto) {
        if($monto == 332) {
            $this->plata = $this->plata+388;
            print("Costo carga: $".$this->monto." más un bonus de $56. Saldo (S.E.U.O): $".$this->plata."\n");
        }
        else{
            if($monto == 500) {
                $this->plata = $this->plata + 652;
                print("Costo carga: $".$this->monto." más un bonus de $140. Saldo (S.E.U.O): $".$this->plata."\n");
            }
        }
        else{
            $this->plata = $this->plata+$monto;
            print("Costo carga: $".$this->monto." . Saldo (S.E.U.O): $".$this->plata."\n");
        }
        return 0;
    }
#BOI I MADE IT
