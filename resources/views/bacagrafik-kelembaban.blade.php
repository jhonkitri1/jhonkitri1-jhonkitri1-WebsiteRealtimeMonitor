<!-- resources/views/bacagrafik-kelembaban.blade.php -->
<script>
    var ctxKelembaban = document.getElementById('grafik-kelembaban').getContext('2d');
    var kelembabanChart = new Chart(ctxKelembaban, {
        type: 'line',
        data: {
            labels: @json($labels),
            datasets: [{
                label: 'Kelembaban',
                data: @json($kelembabanData),
                borderColor: 'rgba(54, 162, 235, 1)',
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
                        text: 'Kelembaban (%)'
                    }
                }
            }
        }
    });
</script>
