<?php

use App\Http\Controllers\Admin\FieldsController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ToolsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('front.data.share')->group(function(){
    Route::get('/', [FrontController::class, 'index']) -> name('index');

    Route::prefix('/')->group(function(){

        Route::get('about', [FrontController::class, 'about'])-> name('about');
        Route::get('contact', [FrontController::class, 'contact'])-> name('contact');
        Route::get('tool-info', [ToolController::class, 'toolInfo'])->name('tool-info');
       /* Route::get('tool-info/{tool-info}', [ToolController::class, 'toolInfoParam'])->name('tools.tool-info');*/
        Route::get('docentlik-hesaplama', [ToolController::class, 'index'])->name('docentlik-hesaplama');
        Route::get('docentlik-hesaplama/{field}', [ToolController::class, 'tool'])->name('docentlik-hesaplama.field');
        //Route::get('tool/egitim-bilimleri', [ToolController::class, 'tool'])->name('tools.tool');

        Route::get('fields', function (){
            return view('layouts.fields');
        });
        Route::post('docentlik-hesaplama/egitim-bilimleri', [ToolController::class, 'tool']);


        /*Route::get('tool/egitim-bilimleri', function (){
            return view('front.egitim-bilimleri-temel-alani');
        });*/
/* Route::get('tool/egitim-bilimleri', [FieldRequirements::class, 'index'])->name('tool/egitim-bilimleri');*/
    });
});




Route::prefix('/')->middleware('auth')->middleware('auth')->group(function (){

    Route::get('home', [AdminController::class, 'index'])-> name('admin.index');

    Route::prefix('admin')->middleware('auth')->group(function (){

        Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
        Route::resource('/fields', FieldsController::class);
        route::post('/fields-delete', [FieldsController::class, 'destroy'])->name('fields.delete');
        route::post('/fields-change-status', [FieldsController::class, 'changeStatus'])->name('fields.changeStatus');
        Route::resource('/tools', ToolsController::class);

        Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
        Route::post('/menu.add', [MenuController::class, 'add'])->name('menu.add');
        Route::post('/menu.edit', [MenuController::class, 'edit'])->name('menu.edit');
        Route::post('/menu.edit-show', [MenuController::class, 'editShow'])->name('menu.editShow');
        Route::post('/menu.delete', [MenuController::class, 'delete'])->name('menu.delete');
        route::post('/menu-change-status', [MenuController::class, 'changeStatus'])->name('menu.changeStatus');


    });
});


