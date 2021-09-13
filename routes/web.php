<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\Auth\ManagerLoginController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\DriverLoginController;

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

Route::prefix('user')->group(function()
{
    Route::get('/',[UserController::class, 'home'])->name('user.index');
    Route::get('/ride/request',[UserController::class, 'ride_request'])->name('user.ride.request');
    Route::get('/historique',[UserController::class, 'historique'])->name('user.historique');

});

Route::prefix('admin')->group(function()
{
   //Auth Routes
    Route::get('/login',[AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login',[AdminLoginController::class, 'login'])->name('admin.login.submit');

    //GET ROUTES
    Route::get('/',[AdminController::class, 'index'])->name('admin.index');
   

});

Route::prefix('driver')->group(function()
{
   //Auth Routes
    Route::get('/login',[DriverLoginController::class, 'showLoginForm'])->name('driver.login');
    Route::post('/login',[DriverLoginController::class, 'login'])->name('driver.login.submit');

    //GET ROUTES
    Route::get('/',[DriverController::class, 'index'])->name('driver.index');
   

});



Route::prefix('manager')->group(function()
{

    //Auth Routes
    Route::get('/login',[ManagerLoginController::class, 'showLoginForm'])->name('manager.login');
    Route::post('/login',[ManagerLoginController::class, 'login'])->name('manager.login.submit');

    //GET ROUTES
    Route::get('/',[ManagerController::class, 'home'])->name('manager.index');
    Route::get('/demandes',[ManagerController::class, 'demandes'])->name('manager.demandes');
    Route::get('/vehicules/recharge/carburant',[ManagerController::class, 'recharge'])->name('manager.recharge');
    Route::get('/vehicules/vehicule/new',[ManagerController::class, 'new_vehicule'])->name('manager.vehicule.new');
    Route::get('/vehicules/maintenance',[ManagerController::class, 'maintenance'])->name('manager.maintenance');
    Route::get('/vehicules/maintenance/{id}/details',[ManagerController::class, 'maintenance_details']);
    Route::get('/vehicules',[ManagerController::class, 'vehicules'])->name('manager.vehicules');
    Route::get('/vehicules/settings',[ManagerController::class, 'parametres_vehicules'])->name('manager.vehicules.settings');
    Route::get('/vehicules/visites',[ManagerController::class, 'visites'])->name('manager.vehicules.visites');
    Route::get('/vehicules/visites/updates',[ManagerController::class, 'update_visites'])->name('manager.vehicules.visites.update');
    Route::get('/vehicules/vehicule/{id}',[ManagerController::class, 'vehicule']);
    Route::get('/vehicules/vehicule/{id}/edit',[ManagerController::class, 'vehicule_edit']);
    Route::get('/vehicules/vehicule/{id}/recharges',[ManagerController::class, 'car_recharge_history']);
    
    Route::get('/drivers/driver/new',[ManagerController::class, 'new_driver'])->name('manager.driver.new');


    //POST ROUTES
    Route::post('/vehicules/vehicule/new',[ManagerController::class, 'new_vehicule_post'])->name('manager.vehicule.new');
    Route::post('/drivers/driver/new',[ManagerController::class, 'new_driver_post'])->name('manager.driver.new');
    Route::post('/vehicules/vehicule/{id}/edit',[ManagerController::class, 'vehicule_edit_post']);
    Route::post('/vehicules/recharge/carburant',[ManagerController::class, 'vehicule_recharge_post'])->name('manager.recharge');
    Route::post('/vehicules/maintenance',[ManagerController::class, 'car_maintenance_post'])->name('manager.maintenance');
    Route::post('/vehicules/settings',[ManagerController::class, 'parametres_vehicules_post'])->name('manager.vehicules.settings');




});

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
