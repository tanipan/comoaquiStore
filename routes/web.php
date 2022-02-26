<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HuberController;

use App\Http\Controllers\EcommerceController;
use Cornford\Googlmapper\Facades\MapperFacade;
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

//Web-landin
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return redirect()->route('admin.user.list');
});

/*
Route::get('/accesibilidad', [HomeController::class, 'accesibilidad'])->name('accesibilidad');
Route::get('/agencia-transporte', [HomeController::class, 'agenciaTransporte'])->name('agencia.transporte');
Route::get('/aviso-legal', [HomeController::class, 'avisoLegal'])->name('aviso.legal');
Route::get('/comercio-online', [HomeController::class, 'comercioOnline'])->name('comercio.online');
Route::get('/hazte-hubber', [HomeController::class, 'hazteHubber'])->name('hazte.hubber');
Route::get('/ofertas-de-trabajo', [HomeController::class, 'ofertasTrabajo'])->name('ofertas.trabajo');
//Route::get('/politica-de-cookies', [HomeController::class, 'cookies'])->name('cookies');
Route::get('/privacidad', [HomeController::class, 'privacidad'])->name('privacidad');
Route::get('/mision', [HomeController::class, 'mision'])->name('mision');
Route::post('/huber', [HuberController::class, 'createhuber'])->name('huber.createhuber');
Route::get('/politica-cookies', [HomeController::class, 'cookies'])->name('politica.cookies');
Route::post('/ecommerce', [EcommerceController::class, 'createecommerce'])->name('ecommerce.createecommerce');
*/

//Rutas pendientes
//Route::get('/envio', [HomeController::class, 'envio'])->name('envio');
//Route::get('/founder', [HomeController::class, 'founder'])->name('founder');
//Route::get('/hazte-hubber-info', [HomeController::class, 'hazteHubberInfo'])->name('hazte.hubber.info');
//Route::get('/hazte-hubber', [HomeController::class, 'hazteHubber'])->name('hazte.hubber');
//Route::get('/agencia-transporte-info', [HomeController::class, 'agenciaTransporteInfo'])->name('agencia.transporte.info');
//Route::get('/comercio-online-info', [HomeController::class, 'comercioOnlineInfo'])->name('comercio.online.info');


//Formularios
Route::get('/step-two/{token}', [HomeController::class, 'stepTwo'])->name('step.two');
Route::post('/upload/docu/{token}', [HomeController::class, 'uploadDocu'])->name('upload.docu');

//Huber
Route::post('/create-huber', [HuberController::class, 'store'])->name('huber.create');
Route::get('/test-mail', [HuberController::class, 'testMail'])->name('huber.create.test');
Route::get('/test-mail-web', [HuberController::class, 'testMailWeb'])->name('huber.create.test.web');


Route::get('/test', [HuberController::class, 'test'])->name('huber.test');
Route::get('/test2', [HuberController::class, 'test2'])->name('huber.test2');
