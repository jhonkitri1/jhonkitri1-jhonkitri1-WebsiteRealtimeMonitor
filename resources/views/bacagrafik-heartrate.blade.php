<script>

   
    // Grafik Heartrate
    const ctxHeartrate = document.getElementById('grafik-heartrate').getContext('2d');
    const heartrateChart = new Chart(ctxHeartrate, {
        type: 'line',
        data: {
            labels: @json($labels), // Waktu pengukuran
            datasets: [{
                label: 'Heartrate (bpm)',
                data: @json($heartrateData), // Data kelembaban
                backgroundColor: "rgba(99, 134, 171, 0.2)",
                borderColor : "rgba(0, 67, 138,3)",
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
                        text: 'Heartrate (bpm)'
                    }
                  
                }
            }
        }
    });

   
</script>	