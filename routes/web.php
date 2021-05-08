<?php

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

Route::get('/', function () {
    return view('auth.register');
});

Route::get('mahasiswa', App\Http\Livewire\Mahasiswa\Index::class)->name('mahasiswa')->middleware('auth');
Route::get('beasiswa', App\Http\Livewire\Beasiswa\Index::class)->name('beasiswa')->middleware('auth');
Route::get('semester', App\Http\Livewire\Semester\Index::class)->name('semester')->middleware('auth');
Route::get('forum', App\Http\Livewire\Forum\Index::class)->name('forum')->middleware('auth');
Route::get('karya', App\Http\Livewire\Karya\Index::class)->name('karya')->middleware('auth');
Route::get('mentoring', App\Http\Livewire\Mentoring\Index::class)->name('mentoring')->middleware('auth');
Route::get('org_mhs', App\Http\Livewire\OrgMhs\Index::class)->name('org_mhs')->middleware('auth');
Route::get('prestasi', App\Http\Livewire\Prestasi\Index::class)->name('prestasi')->middleware('auth');
Route::get('sosial', App\Http\Livewire\Sosial\Index::class)->name('sosial')->middleware('auth');
Route::get('tahsin', App\Http\Livewire\Tahsin\Index::class)->name('tahsin')->middleware('auth');
Route::get('laporan', App\Http\Livewire\Laporan\Index::class)->name('laporan')->middleware('auth');

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',App\Http\Livewire\Dashboard\Index::class, function () {

    return view('dashboard');
	
})->name('dashboard');
*/
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',App\Http\Livewire\Dashboard\Index::class)->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
	Route::get('dashboard',App\Http\Livewire\Dashboard\Index::class)->name('dashboard');
	Route::get('view/{id}',App\Http\Livewire\View\Index::class)->name('view');
});