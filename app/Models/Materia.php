<?php

namespace App\Models;

use CodeIgniter\Model;

class Materia extends Model
{
    protected $table            = 'materia';
    protected $primaryKey       = 'codigo';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombre'];

   
}
