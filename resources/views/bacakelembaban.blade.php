<?php  
    // foreach ($nilaisensor as $data) 
    // {
    //     //cetak isi kelembaban
    //     echo $data->kelembaban;
    // }

    // foreach ($nilaisensor as $data) 
    // {
    //     // Tentukan status dan warna dalam satu kali evaluasi
    //     switch (true) {
    //         case ($data->kelembaban >= 40 && $data->kelembaban <= 60):
    //             $status = 'Normal';
    //             $color = 'green';
    //             break;
    //         case ($data->kelembaban >= 1 && $data->kelembaban < 40):
    //             $status = 'Dry';
    //             $color = 'orange';
    //             break;
    //         default:
    //             $status = 'Moist';
    //             $color = 'red';
    //     }

    //     // Cetak hasil
    //     echo "<span style='color: $color; font-weight: bold;'>
    //             <strong>{$data->kelembaban} %</strong> and <strong>$status</strong>
    //         </span><br>";
    // }

    if ($nilaisensor) {
        // Tentukan status dan warna dalam satu kali evaluasi
        switch (true) {
            case ($nilaisensor->kelembaban >= 40 && $nilaisensor->kelembaban <= 60):
                $status = 'Normal';
                $color = 'green';
                break;
            case ($nilaisensor->kelembaban >= 1 && $nilaisensor->kelembaban < 40):
                $status = 'Dry';
                $color = 'orange';
                break;
            default:
                $status = 'Moist';
                $color = 'red';
        }

        // Cetak hasil
        echo "<span style='color: $color; font-weight: bold;'>
                <strong>{$nilaisensor->kelembaban} %</strong> and <strong>$status</strong>
            </span><br>";
    } else {
        echo "<p>Data sensor tidak tersedia.</p>";
    }
?>