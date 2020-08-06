<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['Ruc', 'RazonSocial'];
    protected $table = 'tblProveedores';
    protected $primaryKey = 'idLibroVentas';
}
