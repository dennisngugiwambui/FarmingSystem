@extends('Farmer.app')

@section('content')
    <!-- resources/views/chart.blade.php -->

    <canvas id="cropChart" style="width:100%;max-width:600px"></canvas>
    <canvas id="monthChart" style="width:100%;max-width:600px"></canvas>

    <script>
        // Crop data
        var cropLabels = {!! json_encode($cropLabels) !!};
        var cropCounts = {!! json_encode($cropCounts) !!};
        var cropColors = {!! json_encode($cropColors) !!};

        // Month data
        var monthLabels = {!! json_encode($monthLabels) !!};
        var monthCounts = {!! json_encode($monthCounts) !!};
        var monthColors = {!! json_encode($monthColors) !!};

        // Crop chart
        new Chart("cropChart", {
            type: "bar",
            data: {
                labels: cropLabels,
                datasets: [{
                    backgroundColor: cropColors,
                    data: cropCounts
                }]
            },
            options: {
                legend: { display: false },
                title: {
                    display: true,
                    text: "Crop Types"
                }
            }
        });

        // Month chart
        new Chart("monthChart", {
            type: "bar",
            data: {
                labels: monthLabels,
                datasets: [{
                    backgroundColor: monthColors,
                    data: monthCounts
                }]
            },
            options: {
                legend: { display: false },
                title: {
                    display: true,
                    text: "Monthly Counts"
                }
            }
        });
    </script>

@endsection
