@props([
    'title' => 'No title',
    'counter' => 'Rp 17.000',
    'chartId' => 'salesChart',
])

<div class="flex flex-col rounded-xl w-[480px] h-54 p-4 bg-white custom-shadow">

    <div class="flex flex-row">
        <img src="images/salesicon.png" class="w-8 h-8 self-center m-2">
        <div class="flex flex-col">
            <h1 class="text-gray-400">{{ $title }}</h1>
            <h1 class="font-semibold pl-1">{{ $counter }}</h1>
        </div>
    </div>

    <div class="flex-1" wire:ignore>
        <canvas id="{{ $chartId }}"></canvas>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:navigated', initChart);
        document.addEventListener('DOMContentLoaded', initChart);

        function initChart() {

            const linegraph = document.getElementById('{{ $chartId }}');
            if (!linegraph) return;

            if (linegraph.chart) {
                linegraph.chart.destroy();
            }

            linegraph.chart = new Chart(linegraph, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        data: [1000000, 3000000, 4000000, 7500000, 12000000, 6000000, 5000000],
                        borderColor: '#3B82F6',
                        backgroundColor: 'rgba(59,130,246,0.1)',
                        tension: 0.4,
                        fill: true,
                        pointRadius: 4
                    }]
                },
                options: {
                    scales: {
                        y: {
                            min: 0,
                            max: 15000000,
                            ticks: {
                                stepSize: 5000000
                            }
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }

                },

            });
        }
    </script>
@endpush
