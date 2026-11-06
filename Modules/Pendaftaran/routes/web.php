
<?php

use Illuminate\Support\Facades\Route;
use Modules\Pendaftaran\Http\Controllers\PendaftaranController;

Route::middleware(['auth', 'role:admin,user'])->group(function () {

    // Menampilkan halaman pendaftaran
    Route::get('pendaftaran', [PendaftaranController::class, 'index'])
        ->name('pendaftaran.index');

    // Mengambil seluruh data pendaftaran melalui AJAX
    Route::get('pendaftaran/data', [PendaftaranController::class, 'getData'])
        ->name('pendaftaran.data');

    // Menyimpan data pendaftaran
    Route::post('pendaftaran', [PendaftaranController::class, 'store'])
        ->name('pendaftaran.store');

    // Mengambil data pendaftaran untuk diedit
    Route::get('pendaftaran/{daftar}/edit', [PendaftaranController::class, 'edit'])
        ->name('pendaftaran.edit');

    // Memperbarui data pendaftaran
    Route::put('pendaftaran/{daftar}', [PendaftaranController::class, 'update'])
        ->name('pendaftaran.update');

    // Menghapus data pendaftaran
    Route::delete('pendaftaran/{daftar}', [PendaftaranController::class, 'destroy'])
        ->name('pendaftaran.destroy');

});
