<?php  

    if ($nilaisensor) {
        // Tentukan status dan warna dalam satu kali evaluasi
        switch (true) {
            case ($nilaisensor->oxygen >= 90 && $nilaisensor->oxygen <= 100):
                $status = 'Normal';
                $color = 'green';
                break;
            case ($nilaisensor->oxygen >= 1 && $nilaisensor->oxygen < 90):
                $status = 'Low';
                $color = 'orange';
                break;
            default:
                $status = 'Low';
                $color = 'red';
        }

        // Cetak hasil
        echo "<span style='color: $color; font-weight: bold;'>
                <strong>{$nilaisensor->oxygen} %</strong> and <strong>$status</strong>
            </span><br>";
    } else {
        echo "<p>Data sensor tidak tersedia.</p>";
    }
?>