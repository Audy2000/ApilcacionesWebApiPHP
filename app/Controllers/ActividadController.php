<?php

namespace App\Controllers;

use App\Models\Materia;
use App\Models\TipoActividad;
use CodeIgniter\RESTful\ResourceController;

class ActividadController extends ResourceController
{
    protected $modelName='App\Models\Actividad';
    protected $tipoActividad;
    protected $materia;

    public function __construct() {
        $this->tipoActividad = new TipoActividad();
        $this->materia = new Materia();
        
    }
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    
    public function show($id = null)
    {
        $actividad = $this->model->find($id);
        if ($actividad) {

            $materia = $this->materia->find($actividad['id_materia']);
            $tipoActividad = $this->tipoActividad->find($actividad['id_tipo_actividad']);

            $actividad['materia']= $materia;
            $actividad['tipoActividad']=$tipoActividad;
            return $this->respond($actividad);
        } else {
            return $this->failNotFound('No se encuentra');
        }
    }

    
    public function create()
    {
        $data = $this->request->getJSON();
         
        //return $data;
        if ($this->model->insert($data)) {
            return $this->respondCreated($data);
        } else {
            return $this->failValidationErrors('Error Guardando');
        }
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON();
        if ($this->model->update($id, $data)) {
            return $this->respond($data);
        } else {
            return $this->failValidationErrors('Error Actualizando');
        }
    }

    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted('Eliminado');
        } else {
            return $this->failNotFound('No se encontró');
        }
    }
}
