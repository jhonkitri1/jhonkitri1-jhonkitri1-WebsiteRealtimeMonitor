<!-- resources/views/bacagrafik-suhu.blade.php -->
<script>
    const ctxOxygen = document.getElementById('grafik-oxygen').getContext('2d');
    const oxygenChart = new Chart(ctxOxygen, {
        type: 'line',
        data: {
            labels: @json($labels),
            datasets: [{
                label: 'Oxygen',
                data: @json($oxygenData),
                backgroundColor: "rgba(52, 231, 43, 0.2)",
                borderColor : "rgba(53,231,43,3)",
                fill: true,
                tension: 0.1
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
                        text: 'Oxygen (%)'
                    }
                }
            }
        }
    });
</script>
