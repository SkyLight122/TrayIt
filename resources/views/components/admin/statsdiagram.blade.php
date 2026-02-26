@props([
    'title' => 'No title',
    'chartId' => 'salesChart',
])


<div class="flex flex-col rounded-xl w-172 h-54 p-4 bg-white custom-shadow">
    <div class="flex flex-row">
        <h1 class="text-black font-semibold">{{ $title }}</h1>
    </div>

    <div class="flex-1 mt-6" wire:ignore>
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
                type: 'bar',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        data: [11000000, 13000000, 4000000, 7500000, 12000000, 6000000, 5000000],
                        borderColor: '#3B82F6',
                        backgroundColor: '#3B82F6',
                        hoverBackgroundColor: 'blue',
                        borderRadius: 6,
                        hoverBorderRadius: 8,
                        barThickness: 16
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
