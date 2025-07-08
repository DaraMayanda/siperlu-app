<?php

use App\Http\Controllers\LaporanController;

Route::get('/', [LaporanController::class, 'index']);
Route::get('/laporan/create', [LaporanController::class, 'create']);
Route::post('/laporan/store', [LaporanController::class, 'store']);
Route::get('/admin/laporan', [LaporanController::class, 'admin']);
Route::get('/admin/laporan/{id}', [LaporanController::class, 'show']);
Route::post('/admin/laporan/{id}/update-status', [LaporanController::class, 'updateStatus']);
Route::get('/admin/laporan/pdf', [LaporanController::class, 'cetakPdf']);

