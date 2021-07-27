<?php
use core\Router;

$router = new Router();

//Rota principal para o home
$router->get('/', 'HomeController@index');

//Rotas de get e post para adicionar um usuário
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');

//Rotas get e post para editar um usuário
$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');

//Rota que envia ao metodo del, de exclusão do usuário
$router->get('/usuario/{id}/excluir', 'UsuariosController@del');
