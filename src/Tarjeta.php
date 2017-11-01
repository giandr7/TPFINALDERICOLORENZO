<?php

namespace TPFINALDERICOLORENZO;

class Medium
{
    public $lineaVehiculo, $ID, $Hora;
    
    public function __construct($a, $b, $c)
    {
        $this->lineaVehiculo = $a;
        $this->ID = $b;
        $this->Hora = $c;
    }
}

class Tarjeta
{
    public $colectivo, $last_colectivo, $monto, $viajes_hechos, $dia, $hora, $plata, $vplus, $Bici;
    
    public $estudiante, $normal, $bicicleta, $transbordo;
    
    public function __construct()
    {
        $this->plata = 0;
        $this->viajes_hechos = 0;
        $this->vplus=0;
        $this->Bici = 0;
        
        $this->estudiante =  4.45;
        $this->estudianteT = 1.32;
        
        $this->normal = 8.50;
        $this->normalT = 2.64;
        
        $this->bicicleta = 12.75;
    }
    
    public function credito()
    {
        printf("Su saldo (S.E.U.O): $" . $this->plata . ".\n");
    }

    public function viajes_tomados()
    {
        return $this->viajes_hechos;
    }
    
    public function viajes_plus()
    {
        if($this->vplus=2) 
        {
            return 0;
        }
        $this->vplus = $this->vplus +1;
        return 0;
    }
    
    public function cobrar_vplus($cant)
    {
        $this->plata = $this->plata - ($cant * $this->normal);
        printf("Se han cobrado ".$cant." viaje(s) plus.\n");
        $this->vplus = 0;
        //Pagar restaura la cantidad de viajes plus disponibles.
    }

    public function salePlata_salePlata($monto)
    {
        if($monto == 332) 
        {
            $this->plata = $this->plata+388;
            printf("Costo carga: $".$this->monto." más un bonus de $56. Saldo (S.E.U.O): $".$this->plata."\n");
        } elseif($monto == 500) 
        {
                $this->plata = $this->plata + 652;
                printf("Costo carga: $".$this->monto." más un bonus de $140. Saldo (S.E.U.O): $".$this->plata."\n");
        } else
        {
            $this->plata = $this->plata+$monto;
            printf("Costo carga: $".$this->monto." . Saldo (S.E.U.O): $".$this->plata."\n");
        }
        //Pagar luego de haber gastado los viajes plus te descuenta cant viajes plus + el tipo de viaje que pagas
        //Eso va a estar en el otro archivo. Acà entras vos Niaggi :*
        return 0;
    }
    
    public function subirseCole($medioQ, Medium $transporte)
    {
        if($this->vplus==2 && $this->plata < $this->normal) 
        {
        	printf("Bajate pibe. No pasa nadie gratis aca.");
        	return 0;
        } else 
        	{
     		if($last_colectivo != $transporte->lineaVehiculo && $this->hora + 86400 <= time())
       		{
          		if($MedioQ==1) 
            	{
            		$this->plata = $this->plata - $this->estudianteT;
          		} 
          		else 
          		{
          			$this->plata = $this->plata - $this->normalT;
          		}
         	}
	          elseif($MedioQ==1) 
	          { 
	          	$this->plata = $this->plata - $this->estudiante;
	          }
	          else
	          {
	          	$this->plata = $this->plata - $this->normal;
	          } 
          	$this->last_colectivo = $transporte->linea;
          	$this->viajes_hechos = $this->viajes_hechos + 1;
      		}
	}

    public function retirarBici(Medium $transporte)
    {
	$this->Bici=time();
        if($this->Bici <= $transporte->Hora + (24*60*60)) 
        {
            printf("Se ha retirado la bicicleta.\n");
	    return 0;
        }
        else
        {
            if($this->plata < $this->bicicleta) 
            {
               printf("No se puede retirar la bicicleta.\n");
            }
            //Viajes plus no utilizables en Bicicletas.
            else 
            {
                $this->plata = $this->plata - $this->bicicleta;
                if($this->vplus > 0) 
                {
                    cobrar_vplus($this->vplus);
                }
                //Viajes plus cobrables en voleto de bici
                $transporte->Hora = time();
            }
        }
	printf("Se ha retirado la bicicleta.\n");
        credito();
	return 0;
    }
}
