@extends('Homepage.app')

@section('content')

    <div style="width: 80%; margin: auto;">
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    </div>

    <script>
        // Assuming you've passed $farmerLabels, $farmerCounts, and $farmerColors from the controller
        new Chart("myChart", {
            type: "bar",
            data: {
                labels: {!! json_encode($farmerLabels) !!},
                datasets: [{
                    backgroundColor: {!! json_encode($farmerColors) !!},
                    data: {!! json_encode($farmerCounts) !!}
                }]
            },
            options: {
                scales: {
                    x: [{
                        ticks: {
                            autoSkip: false, // Prevent labels from being skipped
                            maxRotation: 45, // Rotate x-axis labels for better visibility
                            minRotation: 45
                        }
                    }],
                    y: [{
                        ticks: {
                            beginAtZero: true // Start y-axis from zero
                        }
                    }]
                },
                legend: { display: false },
                title: {
                    display: true,
                    text: "Farm Record Visualization"
                }
            }
        });
    </script>
@endsection
