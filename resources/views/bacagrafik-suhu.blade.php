<!-- resources/views/bacagrafik-suhu.blade.php -->
<script>
    const ctxSuhu = document.getElementById('grafik-suhu').getContext('2d');
    const suhuChart = new Chart(ctxSuhu, {
        type: 'line',
        data: {
            labels: @json($labels),
            datasets: [{
                label: 'Suhu',
                data: @json($suhuData),
                borderColor: 'rgba(255, 99, 132, 1)',
                fill: false
            }]
        },
        options: {
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Waktu'
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Suhu (°C)'
                    }
                }
            }
        }
    });
</script>
