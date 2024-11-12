<?php  
    if ($nilaisensor) {
        // Tentukan status dan warna dalam satu kali evaluasi
        switch (true) {
            case ($nilaisensor->heartrate >= 60 && $nilaisensor->heartrate <= 60):
                $status = 'Normal';
                $color = 'green';
                break;
            case ($nilaisensor->heartrate> 100):
                $status = 'High Normal';
                $color = 'orange';
                break;
            default:
                $status = 'Low';
                $color = 'red';
        }

        // Cetak hasil
        echo "<span style='color: $color; font-weight: bold;'>
                <strong>{$nilaisensor->heartrate} bpm</strong> and <strong>$status</strong>
            </span><br>";
    } else {
        echo "<p>Data sensor tidak tersedia.</p>";
    }
?>