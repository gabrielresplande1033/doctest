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
    $this->get('cadastrar', 'CabecalhoController@index')->name('cadastrar');
    $this->get('admin', 'AdminController@index')->name('admin');
});

$this->get('/', 'SiteController@index');

Auth::routes();

