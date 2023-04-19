<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TriController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $vgData = DB::table('data')->get();
    return view('show_data', compact('vgData'));
});

Route::get("tri_ASC", [TriController::class, 'sort_by_ASC'])->name('sort_by_ASC');
Route::get("tri_DESC", [TriController::class, 'sort_by_DESC'])->name('sort_by_DESC');
