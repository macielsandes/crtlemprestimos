
<?php

use App\Http\Controllers\{
    MaterialController
};

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::delete('/material{id}',[MaterialController::class, 'destroy']) -> name('materials.destroy');
Route::put('/material/{id}',[MaterialController::class, 'update']) -> name('materials.update');
Route::get('/material/{id}/edit', [MaterialController::class, 'edit'])-> name('materials.edit');
Route::get('/material', [MaterialController::class, 'index'])-> name('materials.index');
Route::get('/material/create', [MaterialController::class, 'create'])-> name('materials.create');
Route::post('/material', [MaterialController::class, 'store'])-> name('materials.store');
Route::get('/material/{id}', [MaterialController::class, 'show'])-> name('materials.show');

Route::get('/', function () {
    return view('welcome');
});
