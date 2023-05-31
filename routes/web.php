<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ParticipantController;

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

Route::get('/', [ParticipantController::class, 'index']);

Route::prefix('participants')->name('participants.')->group(function () {
    Route::get('export', [ParticipantController::class, 'export'])->name('export');
    Route::post('import', [ParticipantController::class, 'import'])->name('import');
    Route::get('delete-all', [ParticipantController::class, 'deleteAll'])->name('delete-all');
});
Route::resource('participants', ParticipantController::class);

Route::prefix('ceritificates')->name('ceritificates.')->group(function () {
    Route::get('{participant}/save', [CertificateController::class, 'save'])->name('save');
    Route::get('{participant}/download', [CertificateController::class, 'download'])->name('download');
    Route::get('{participant}/send', [CertificateController::class, 'send'])->name('send');
    Route::get('viewpdf', [CertificateController::class, 'viewpdf'])->name('viewpdf');
    Route::get('{scale}/download-all-certificates', [CertificateController::class, 'downloadAllCertificates'])->name('download-all-certificates');
    Route::get('{scale}/send-all-certificates', [CertificateController::class, 'sendAllCertificates'])->name('send-all-certificates');
});
Route::resource('ceritificates', CertificateController::class);
