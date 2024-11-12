<?php

use Illuminate\Support\Facades\Route;
//panggil controller SensorLaravel
use App\Http\Controllers\SensorLaravel;

// Route untuk menampilkan halaman monitoring
// Route::get('/monitoring', [SensorLaravel::class, 'monitoringPage']);
// Route::get('/sensorlaravel', [SensorLaravel::class, 'monitoringPage']);

Route::get('/', function () {
    return view('monitoring');
});

// Route untuk mengambil data suhu secara real-time
Route::get('/bacasuhu', [SensorLaravel::class, 'bacasuhu']);

// Route untuk mengambil data oxygen secara real-time
Route::get('/bacakelembaban', [SensorLaravel::class, 'bacakelembaban']);

// Route untuk mengambil data suhu secara real-time
Route::get('/bacaheartrate', [SensorLaravel::class, 'bacaheartrate']);

// Route untuk mengambil data oxygen secara real-time
Route::get('/bacaoxygen', [SensorLaravel::class, 'bacaoxygen']);

// Route untuk menampilkan grafik
// Route::get('/bacagrafik', [SensorLaravel::class, 'showMonitoring']);
Route::get('/bacagrafik/suhu', [SensorLaravel::class, 'bacagrafikSuhu']);
Route::get('/bacagrafik/kelembaban', [SensorLaravel::class, 'bacagrafikKelembaban']);
Route::get('/bacagrafik/heartrate', [SensorLaravel::class, 'bacagrafikHeartrate']);
Route::get('/bacagrafik/oxygen', [SensorLaravel::class, 'bacagrafikOxygen']);

// Route to save temperature and humidity to tb_sensor
Route::get('/simpan/{nilaisuhu}/{nilaikelembaban}', [SensorLaravel::class, 'simpansensor']);

// Route to save heart rate and oxygen to tb_sensor
Route::get('/simpan/heartrate_oxygen/{nilaiheartrate}/{nilaioxygen}', [SensorLaravel::class, 'simpansensorHeartrateOxygen']);



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



// // Route to read temperature
// Route::get('/bacasuhu', [SensorLaravel::class, 'bacasuhu']);

// // Route to read humidity
// Route::get('/bacakelembaban', [SensorLaravel::class, 'bacakelembaban']);

// // Route to read heart rate
// Route::get('/bacaheartrate', [SensorLaravel::class, 'bacaheartrate']);

// // Route to read oxygen level
// Route::get('/bacaoxygen', [SensorLaravel::class, 'bacaoxygen']);

// // Route::get('/monitoring', [SensorLaravel::class, 'index']);

// // Route to save temperature and humidity to tb_sensor
// Route::get('/simpan/{nilaisuhu}/{nilaikelembaban}', [SensorLaravel::class, 'simpansensor']);

// // Route to save heart rate and oxygen to tb_sensor
// Route::get('/simpan/heartrate_oxygen/{nilaiheartrate}/{nilaioxygen}', [SensorLaravel::class, 'simpansensorHeartrateOxygen']);

// // Rute utama untuk halaman monitoring suhu dan kelembaban
// Route::get('/', [SensorLaravel::class, 'showMonitoring'])->name('monitoring');