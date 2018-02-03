<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/editoras', 'EditoraController@index');

Route::get('/editoras/cria', 'EditoraController@cria');

Route::post('/editoras', 'EditoraController@armazena');
// API Restful (para quem for criar webservice)
// /cursos GET -> CursoController@index listagem de cursos
// /cursos/create Get -> CursoController@create formulario
// /cursos POST -> CursoController@store salva os dados no formulario
// /cursos/1/edit GET -> CursoController@edit formulario de edicao
// /cursos/1 PUT -> CursoController@update atualizo o curso com os dados do formulario
// /cursos/1 DELETE -> CursoController@destroy remove o curso
