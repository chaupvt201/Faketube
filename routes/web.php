<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ChannelController;

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
    return view('welcome');
});
Route::get('/channel-index',[ChannelController::class, 'index']
)->name('index');
Route::post('/post-channel', [ChannelController::class, 'addChannel']
)-> name('post-channel'); 
Route::get('/show', [ChannelController::class, 'show']
)-> name('show');