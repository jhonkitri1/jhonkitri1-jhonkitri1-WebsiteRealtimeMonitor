<?php  
//    function getStatus($suhu) {

//         return $suhu > 20 ? 'Abnormal' : 'Normal';

//     }
//     foreach ($nilaisensor as $data) {

//         echo "Value: " . $data->suhu . "°C, Status: " . getStatus($data->suhu) . "<br>";

//     }

    // foreach ($nilaisensor as $data) 
    // {
    //     //cetak isi suhu
    //     echo $data->suhu . "°C and " . ($data->suhu > 40 ? 'Abnormal' : 'Normal') . "<br>";
    // }

    // foreach ($nilaisensor as $data) {
    //     echo "<span style='color: " . ($data->suhu > 40 ? "red" : "green") . ";'>" . $data->suhu . "°C and " . ($data->suhu > 40 ? 'Abnormal' : 'Normal') . "</span><br>";
    // }

    // foreach ($nilaisensor as $data) 
    // {
    //     echo "<span style='color: " . ($data->suhu > 20 ? "red" : "green") . "; font-weight: bold;'>" . 
    //             "<strong>" . $data->suhu . "°C</strong> and <strong>" . 
    //             ($data->suhu > 20 ? 'Abnormal' : 'Normal') . "</strong>" . 
    //         "</span><br>";
    // }

    // foreach ($nilaisensor as $data) 
    // {
    //     // cetak isi suhu dengan pengecekan kondisi
    //     echo $data->suhu . "°C and " . 
    //         ($data->suhu > 40 
    //             ? '<span style="color: red; font-weight: bold;">Abnormal</span>' 
    //             : '<span style="color: green; font-weight: bold;">Normal</span>'
    //         ) . "<br>";
    // }

    // foreach ($nilaisensor as $data) 
    // {
    //     if ($data->suhu >= 90 && $data->suhu <= 100) {
    //         $status = 'Normal';
    //         $color = 'green';
    //     } elseif ($data->suhu >= 1 && $data->suhu < 90) {
    //         $status = 'Low';
    //         $color = 'orange';
    //     } else {
    //         $status = 'Error';
    //         $color = 'red';
    //     }

    //     echo "<span style='color: " . $color . "; font-weight: bold;'>" . 
    //             "<strong>" . $data->suhu . "°C</strong> and <strong>" . $status . "</strong>" . 
    //         "</span><br>";
    // }
 
    if ($nilaisensor) {
        // Tentukan status dan warna dalam satu kali evaluasi
        switch (true) {
            case ($nilaisensor->suhu >= 90 && $nilaisensor->suhu <= 100):
                $status = 'Normal';
                $color = 'green';
                break;
            case ($nilaisensor->suhu >= 1 && $nilaisensor->suhu < 90):
                $status = 'Low';
                $color = 'orange';
                break;
            default:
                $status = 'Error';
                $color = 'red';
        }

        // Cetak hasil
        echo "<span style='color: $color; font-weight: bold;'>
                <strong>{$nilaisensor->suhu} °C</strong> and <strong>$status</strong>
            </span><br>";
    } else {
        echo "<p>Data sensor tidak tersedia.</p>";
    }

?>