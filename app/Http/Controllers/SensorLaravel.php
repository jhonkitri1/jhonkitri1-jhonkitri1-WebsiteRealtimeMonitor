<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MSensor;
use App\Models\MMax;

class SensorLaravel extends Controller
{
    // public function bacasuhu()
    // {
    //     //baca nilai/isi tabel tb_sensor dan ambil nilai suhu
    //     $sensor = MSensor::select('*')->get();
    //     //kirim ke tampilan baca suhu buat view bacasuhu
    //     return view('bacasuhu',['nilaisensor' => $sensor]);
    // }
    // public function bacasuhu()
    // {
    //     $nilaisensor = MSensor::orderBy('created_at', 'desc')->take(1)->get();
    //     // Now you can use compact()
    //     return view('bacasuhu', compact('nilaisensor'));
    // }

    public function bacasuhu()
    {
        // Ambil data suhu terbaru
        $dataSensor = MSensor::orderBy('created_at', 'desc')->first();

        // Kirim data ke view
        return view('bacasuhu',['nilaisensor' => $dataSensor]);
    }

    public function bacakelembaban()
    {
        // Ambil data suhu terbaru
        $dataSensor = MSensor::orderBy('created_at', 'desc')->first();

        // Kirim data ke view
        return view('bacakelembaban',['nilaisensor' => $dataSensor]);
    }

    public function bacaheartrate()
    {
        // Ambil data suhu terbaru
        $dataMax = MMax::orderBy('created_at', 'desc')->first();

        // Kirim data ke view
        return view('bacaheartrate',['nilaisensor' => $dataMax]);
    }

    public function bacaoxygen()
    {
        // Ambil data suhu terbaru
        $dataMax = MMax::orderBy('created_at', 'desc')->first();

        // Kirim data ke view
        return view('bacaoxygen',['nilaisensor' => $dataMax]);
    }

    // public function bacakelembaban()
    // {
    //     //baca nilai/isi tabel tb_sensor dan ambil nilai suhu
    //     $sensor = MSensor::select('*')->get();
    //     //kirim ke tampilan baca suhu 9buat view bacakelembaban)
    //     return view('bacakelembaban',['nilaisensor' => $sensor]);
    // }

    // public function simpansensor()
    // {
    //    MSensor::where('id', '1')->update(['suhu' => request()->nilaisuhu, 'kelembaban' => request()->nilaikelembaban]);
    // }

    // public function simpansensor()
    // {
    //     //  // Cari ID terakhir atau buat ID baru jika tabel kosong
    //     //  $lastId = MSensor::max('id');
    //     //  $id = $lastId ? $lastId + 1 : 1;
 
    //     //  // Simpan data ke tabel
    //     //  MSensor::create([
    //     //      'id' => $id,
    //     //      'suhu' => request()->suhu,
    //     //      'kelembaban' => request()->kelembaban
    //     //  ]);
    //     MSensor::insert(['suhu' => request()->nilaisuhu, 'kelembaban' => request()->nilaikelembaban]);
    //     MMax::insert(['heartrate' => request()->nilaiheartrate, 'oxygen' => request()->nilaioxygen]);
    // }
    // Method to save temperature and humidity
    public function bacagrafikSuhu()
    {
        $data = MSensor::latest()->take(5)->get()->reverse();
        $labels = $data->pluck('created_at')->map(function($date) {
            return $date->format('H:i:s');
        });
        $suhuData = $data->pluck('suhu');

        return view('bacagrafik-suhu', compact('labels', 'suhuData'));
    }

    public function bacagrafikKelembaban()
    {
        $data = MSensor::latest()->take(5)->get()->reverse();
        $labels = $data->pluck('created_at')->map(function($date) {
            return $date->format('H:i:s');
        });
        $kelembabanData = $data->pluck('kelembaban');

        return view('bacagrafik-kelembaban', compact('labels', 'kelembabanData'));
    }

    public function bacagrafikHeartrate()
    {
        $data = MMax::latest()->take(5)->get()->reverse();
        $labels = $data->pluck('created_at')->map(function($date) {
            return $date->format('H:i:s');
        });
        $heartrateData = $data->pluck('heartrate');

        return view('bacagrafik-heartrate', compact('labels', 'heartrateData'));
    }

    public function bacagrafikOxygen()
    {
        $data = MMax::latest()->take(5)->get()->reverse();
        $labels = $data->pluck('created_at')->map(function($date) {
            return $date->format('H:i:s');
        });
        $oxygenData = $data->pluck('oxygen');

        return view('bacagrafik-oxygen', compact('labels', 'oxygenData'));
    }

    // public function showMonitoringDua()
    // {
    //     // Mengambil data dari tabel tb_sensor untuk suhu dan kelembaban
    //     $sensorDataMax = MMax::select('heartrate', 'oxygen', 'created_at')->take(5)->get();

    //     // Memformat tanggal (created_at) untuk ditampilkan pada grafik
    //     $datesMax = $sensorDataMax->pluck('created_at')->map(function($date) {
    //         return $date->format('H:i:s'); // Menggunakan format untuk Carbon
    //     });

    //     // Mengambil data suhu dan kelembaban dari database
    //     $heartrateData = $sensorDataMax->pluck('heartrate');
    //     $oxygenData = $sensorDataMax->pluck('oxygen');

    //     // Mengirim data ke view
    //     return view('monitoring', [
    //         'heartrateData' => $heartrateData,
    //         'oxygenData' => $oxygenData,
    //         'dates' => $dates
    //     ]);
    // }

    public function simpansensor($nilaisuhu, $nilaikelembaban)
    {
        MSensor::create([
            'suhu' => $nilaisuhu,
            'kelembaban' => $nilaikelembaban,
        ]);

        return response()->json(['message' => 'Temperature and Humidity saved successfully!'], 200);
    }

    // Method to save heart rate and oxygen
    public function simpansensorHeartrateOxygen($nilaiheartrate, $nilaioxygen)
    {
        MMax::create([
            'heartrate' => $nilaiheartrate,
            'oxygen' => $nilaioxygen,
        ]);

        return response()->json(['message' => 'Heart Rate and Oxygen saved successfully!'], 200);
    }
}
