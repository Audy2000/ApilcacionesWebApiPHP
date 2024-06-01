<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class MateriaController extends ResourceController
{
    protected $modelName='App\Models\Materia';
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Not found');
        }
    }

    
    public function create()
    {
        $data = $this->request->getJSON();
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
