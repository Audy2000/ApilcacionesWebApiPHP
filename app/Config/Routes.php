<?php

use CodeIgniter\Router\RouteCollection;

$routes->group('', ['filter' => 'cors'], static function (RouteCollection $routes): void {

    // Para las materias
    $routes->get('api/materia','MateriaController::index');
    $routes->get('api/materia/(:num)','MateriaController::show');
    $routes->post('api/materia/','MateriaController::create');
    $routes->options('api/materia', 'CorsController::handleOptions');
    $routes->put('api/materia/(:num)','MateriaController::update');
    $routes->options('api/materia/(:num)', 'CorsController::handleOptions');
    $routes->delete('api/materia/(:num)','MateriaController::delete');
    $routes->options('api/materia/(:num)', 'CorsController::handleOptions');

    // Para los tipos de Actividad
    
    $routes->get('api/tipoActividad','TipoActividadController::index');
    $routes->get('api/tipoActividad/(:num)','TipoActividadController::show');
    $routes->post('api/tipoActividad/','TipoActividadController::create');
    $routes->options('api/tipoActividad', 'CorsController::handleOptions');
    $routes->put('api/tipoActividad/(:num)','TipoActividadController::update');
    $routes->options('api/tipoActividad/(:num)', 'CorsController::handleOptions');
    $routes->delete('api/tipoActividad/(:num)','TipoActividadController::delete');
    $routes->options('api/tipoActividad/(:num)', 'CorsController::handleOptions');


    // Para las actividades
    $routes->get('api/actividad','ActividadController::index');
    $routes->get('api/actividad/(:num)','ActividadController::show');
    $routes->post('api/actividad/','ActividadController::create');
    $routes->options('api/actividad', 'CorsController::handleOptions');
    $routes->put('api/actividad/(:num)','ActividadController::update');
    $routes->options('api/actividad/(:num)', 'CorsController::handleOptions');
    $routes->delete('api/actividad/(:num)','ActividadController::delete');
    $routes->options('api/actividad/(:num)', 'CorsController::handleOptions');


/*
    $routes->resource('api/materia', [
        'controller' => 'MateriaController',
        'only' => ['index', 'create',  'show', 'update', 'delete']

    ]);
    
    $routes->options('api/materia', 'CorsController::handleOptions');

  
    $routes->resource('api/tipoActividad', [
        'controller' => 'TipoActividadController',
        'only' => ['index', 'create',  'show', 'update', 'delete']
    ]);
    $routes->options('api/tipoActividad', 'CorsController::handleOptions');

    $routes->resource('api/actividad', [
        'controller' => 'ActividadController',
        'only' => ['index', 'create',  'show', 'update', 'delete']
    ]);
    $routes->options('api/actividad', 'CorsController::handleOptions');
    */
});
