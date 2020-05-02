<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class Vehiculo extends Model
{

    //Relacion con la tabla Ingreso_vehiculo
    public $timestamps = false;
    protected $fillable = ['placa', 'tipo', 'modelo'];
    public function ingreso_vehiculo()
    {
        return $this->hasManythrough(Ticket::class, Ingreso_Vehiculo::class);
    }
}
