<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CorsController extends BaseController
{
    public function handleOptions() {
        // Configurar y enviar las cabeceras CORS necesarias
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type");
        header("Access-Control-Max-Age: 86400"); // cache preflight request for 1 day
        
        // Enviar una respuesta vacía con el código de estado 204 No Content
        http_response_code(204);
        exit;
    }
}
