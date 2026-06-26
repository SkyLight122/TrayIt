import './bootstrap';
import Chart from 'chart.js/auto';

window.Chart = Chart;
import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'

Alpine.plugin(collapse)
window.Alpine = Alpine
Alpine.start()
