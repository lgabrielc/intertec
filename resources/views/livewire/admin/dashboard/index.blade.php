@extends('layouts.layout-admin')
@section('title', 'Dashboard')
@section('content')
    @livewire('admin.dashboard.dashboard')

@endsection
<script>
    const chart = new Chart(document.getElementById("myChart"), {
        type: "line",
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "Aug", "Sep", "Nov",
                "Dec"
            ],
            datasets: [{
                label: "16 Mar 2018",
                borderColor: "#4A5568",
                data: [600, 400, 620, 300, 200, 600, 230, 300, 200, 200, 100, 1200],
                fill: false,
                pointBackgroundColor: "#4A5568",
                borderWidth: "3",
                pointBorderWidth: "4",
                pointHoverRadius: "6",
                pointHoverBorderWidth: "8",
                pointHoverBorderColor: "rgb(74,85,104,0.2)",
            }, ],
        },
        options: {
            legend: {
                position: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: false,
                    },
                    display: false,
                }, ],
            },
        },
    });
</script>
