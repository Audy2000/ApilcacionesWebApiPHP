<?php

use CodeIgniter\Router\RouteCollection;

$routes->resource('api/materia',[
    'controller'=>'MateriaController',
    'only' => ['index', 'create',  'show', 'update', 'delete']
]);

$routes->resource('api/tipoActividad',[
    'controller'=>'TipoActividadController',
    'only' => ['index', 'create',  'show', 'update', 'delete']
]);

$routes->resource('api/actividad',[
    'controller'=>'ActividadController',
    'only' => ['index', 'create',  'show', 'update', 'delete']
]);