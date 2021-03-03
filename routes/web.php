<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

/*
Istruzioni:
Create una nuova applicazione che utilizzi la logica di autenticazione fornita da laravel
nel pacchetto laravel/ui.
Separate le routes pubbliche da quelle dell'admin, creando anche controllers separati per l'amministratrore.
Implementate il crud posts completo (solo per l'utente autenticato), creando quindi modello, controller, migrazione e seeder.
Create anche una pagina blog dove l'utente non registrato puó vedere gli articoli del blog.
Bonus:
Implementate lo slug invece dell'id per il metodo show sovrascrivendo nel modello Post il metodo
*/

Route::get('/', 'PageController@index')->name('homepage');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contacts', 'PageController@contacts')->name('contacts');
Route::get('/blog', 'PostController@index')->name('blog');
Route::get('/blog/{post}', 'PostController@show');



Auth::routes(['register' => false]);//così nessuno può più registrarsi all'applicazione

// Da raggruppare in un contesto admin

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('posts', 'PostController'); 
});