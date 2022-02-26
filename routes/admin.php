<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BagsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\HuberController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RejectedController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DeliveredController;

use App\Http\Controllers\InKitchenController;
use App\Http\Controllers\CreatePlateController;
use App\Http\Controllers\CreateCategoryController;

//////////////////////////////////////////////////////////////////////////////
//El control de acceso de estas rutas esta en el fichero RouteServiceProvider
//////////////////////////////////////////////////////////////////////////////

//User
Route::get('/', [UserController::class, 'index'])->name('admin.user.list');
Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('admin.user.store');
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('admin.user.edit');
Route::put('/user/update/{user}', [UserController::class, 'update'])->name('admin.user.update');
Route::delete('/user/delete/{user}', [UserController::class, 'destroy'])->name('admin.user.delete');

//Huber
Route::get('/huber/{huber}', [HuberController::class, 'show'])->name('admin.huber.show');
Route::get('/huber', [HuberController::class, 'index'])->name('admin.huber.list');
Route::get('/huber/create', [HuberController::class, 'create'])->name('admin.huber.create');
Route::post('/huber/store', [HuberController::class, 'store'])->name('admin.huber.store');
Route::get('/huber/edit/{huber}', [HuberController::class, 'edit'])->name('admin.huber.edit');
Route::put('/huber/update/{huber}', [HuberController::class, 'update'])->name('admin.huber.update');
Route::delete('/huber/delete/{huber}', [HuberController::class, 'destroy'])->name('admin.huber.delete');
Route::get('/maps', [HuberController::class, 'mapsShowAllHubers'])->name('admin.huber.maps');

//Cars
Route::get('/car', [CarController::class,'index'])->name('admin.car.list');
Route::get('/car/create', [CarController::class, 'create'])->name('admin.car.create');
Route::post('/car/store', [CarController::class,'store'])->name('admin.car.store');
Route::get('/car/edit/{car}', [CarController::class, 'edit'])->name('admin.car.edit');
Route::put('/car/update/{car}', [CarController::class, 'update'])->name('admin.car.update');
Route::delete('/car/delete/{car}', [CarController::class,'destroy'])->name('admin.car.delete');

//  Routas de la aplicación ComoAqui

// ************* ORDER
// Route::get('/order', [OrderController::class,'index'])->name('admin.order.list'); //TODO  preguntar si ponemos este de inicio
Route::get('/order/recent', [OrderController::class,'index'])->name('admin.recent.list'); 
// Route::get('/order/command/{order}', [OrderController::class,'show'])->name('admin.recent.show'); //TODO falta ID para pasasrle
Route::get('/order/recent/command', [OrderController::class,'show'])->name('admin.recent.show'); 
// Route::get('/order/recent/edit/{order}', [OrderController::class,'edit'])->name('admin.recent.edit');  //TODO falta ID para pasarle
Route::get('/order/recent/edit/modifyOrder', [OrderController::class,'edit'])->name('admin.recent.edit');  //TODO falta ID para pasarle

//InKitchen
Route::get('/order/inKitchen', [InKitchenController::class,'index'])->name('admin.inKitchen.list');

//Delivered
Route::get('/order/delivered', [DeliveredController::class,'index'])->name('admin.delivered.list');

//Rejected
Route::get('/order/rejected', [RejectedController::class,'index'])->name('admin.rejected.list');
// Route::get('/order/rejected/{order}', [RejectedController::class,'index'])->name('admin.rejected.show');//TODO falta ID para pasasrle
Route::get('/order/rejected/orderRejected', [RejectedController::class,'show'])->name('admin.rejected.show');

//Bags
Route::get('/order/delivered/bags', [BagsController::class,'bags'])->name('admin.delivered.bags'); 
// ************* END ORDER

// ************* LETTER
//Menu
Route::get('/letter/menu', [MenuController::class,'index'])->name('admin.menu.list'); 

//CreatePlate
Route::get('/letter/createPlate', [CreatePlateController::class,'index'])->name('admin.createPlate.list'); 


//CreateCategpry
Route::get('/letter/createCategory', [CreateCategoryController::class,'index'])->name('admin.createCategory.list'); 

// ************* END LETTER

// ************* REPORTS
Route::get('/reports/history', [HistoryController::class,'index'])->name('admin.history.list'); 

// ************* BILLS
Route::get('/reports/bills', [BillsController::class,'index'])->name('admin.bills.list'); 

// ************* END REPORTS

// ************* CUSTOMERS
Route::get('/customers', [CustomersController::class,'index'])->name('admin.customers.list'); 
// Route::get('/customers/{customer}', [CustomersController::class,'index'])->name('admin.customers.show'); //TODO cambiar cuando este en bbdd
Route::get('/customers/customer', [CustomersController::class,'show'])->name('admin.customers.show'); 
// ************* END CUSTOMERS

// ************* PROFILE
Route::get('/profile', [ProfileController::class,'index'])->name('admin.profile.list'); 

// ************* END PROFILE

// ************* SETTINGS
Route::get('/settings', [SettingsController::class,'index'])->name('admin.settings.list'); 

// ************* END SETTINGS


//  Route para stock 
Route::get('/categories',[CategoryController::class,'index'])->name('admin.categories.list');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/categories/store', [CategoryController::class,'store'])->name('admin.categories.store');
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('/categories/update/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('/categories/delete/{category}', [CategoryController::class,'destroy'])->name('admin.categories.delete');

Route::get('/articles',[ArticlesController::class,'index'])->name('admin.articles.list');
Route::get('/articles/create', [ArticlesController::class, 'create'])->name('admin.articles.create');
Route::post('/articles/store', [ArticlesController::class,'store'])->name('admin.articles.store');
Route::get('/articles/edit/{article}', [ArticlesController::class, 'edit'])->name('admin.articles.edit');
Route::put('/articles/update/{article}', [ArticlesController::class, 'update'])->name('admin.articles.update');
Route::delete('/articles/delete/{article}', [ArticlesController::class,'destroy'])->name('admin.articles.delete');

Route::get('/stock',[StockController::class,'index'])->name('admin.stock.list');
Route::get('/stock/create', [StockController::class, 'create'])->name('admin.stock.create');
Route::post('/stock/store', [StockController::class,'store'])->name('admin.stock.store');
Route::get('/stock/edit/{stocks}', [StockController::class, 'edit'])->name('admin.stock.edit');
Route::put('/stock/update/{stocks}', [StockController::class, 'update'])->name('admin.stock.update');
Route::delete('/stock/delete/{stocks}', [StockController::class,'destroy'])->name('admin.stock.delete');
