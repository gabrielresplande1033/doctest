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

$this->group(['middleware' => ['auth']], function (){

    $this->get('listar', 'CabecalhoController@listar')->name('listar');
    $this->post('inserirCabecalho', 'CabecalhoController@inserirCabecalho')->name('inserirCabecalho');
    $this->get('cadastrar', 'CabecalhoController@index')->name('cadastrar');
    $this->get('menus/{menu}/editar','CabecalhoController@editarCabecalho')->name('editarCabecalho');
    $this->get('admin', 'AdminController@index')->name('admin');
    $this->put('atualizar/{id}', 'CabecalhoController@atualizar')->name('atualizar');
    $this->delete('deletarCabecalho/{id}', 'CabecalhoController@deletarCabecalho')->name('deletarCabecalho');
});

$this->get('/', 'SiteController@index');

Auth::routes();

