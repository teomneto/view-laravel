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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',function() {

    $nome  = "Anita";
/* quero passa variavel $nome para a view */
// compact('nome') -> ['nome'->$nome];
    dd(compact('nome'));


    return view('ola');
})
;

Route::get('/cursos', function(){
  $cursos = ['TDD'. 'BDD', 'Scrumm','Spring MVC']
  return view('cursos');

});
