<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/courses', 'CoursesController@courses');

$router->get('/courses/add', 'CoursesController@coursesAdd');
$router->post('/courses/add', 'CoursesController@coursesAddAction');

$router->get('/course/{id}/edit', 'CoursesController@courseEdit');
$router->post('/course/{id}/edit', 'CoursesController@courseEditAction');

$router->get('/course/{id}/del', 'CoursesController@courseDelAction');

$router->get('/students', 'StudentsController@students');

$router->get('/students/add', 'StudentsController@studentsAdd');
$router->post('/students/add', 'StudentsController@studentsAddAction');

$router->get('/student/{id}/edit', 'StudentsController@studentEdit');
$router->post('/student/{id}/edit', 'StudentsController@studentEditAction');

$router->get('/student/{id}/del', 'StudentsController@studentDelAction');