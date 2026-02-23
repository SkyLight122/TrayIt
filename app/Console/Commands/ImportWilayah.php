<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Province;
use App\Models\City;

class ImportWilayah extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-wilayah';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $provinces = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json')->json();

        foreach($provinces as $province){
            Province::updateOrCreate(
                ['id' => $province['id']],
                ['province' => $province['name']]
            );

            $cities = Http::get("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$province['id']}.json")->json();

            foreach($cities as $city){
                City::updateOrCreate(
                    ['id' => $city['id']],
                    [
                        'province_id' => $province['id'],
                        'city' => $city['name']
                    ]
                );
            }
        }
        $this->info('Import wilayah selesai!');
    }
}
