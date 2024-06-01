<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoActividad extends Model
{
    protected $table            = 'tipo_actividad';
    protected $primaryKey       = 'codigo';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombre'];

    
}
