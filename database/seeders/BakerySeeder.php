<?php

namespace Database\Seeders;

use App\Models\Bakery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BakerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bakery::create([
        'user_id' => 1,
        'name' => 'Golden Crust Bakery',
        'email' => 'goldencrust@gmail.com',
        'phone_number' => '081234567801',
        'description' => 'Bakery rumahan dengan roti fresh setiap hari',
        'address' => 'Jl. Melati No. 1',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-01',
        'order_per_day' => 12,
    ]);

    Bakery::create([
        'user_id' => 2,
        'name' => 'Sweet Oven',
        'email' => 'sweetoven@gmail.com',
        'phone_number' => '081234567802',
        'description' => 'Spesialis cake ulang tahun dan dessert box',
        'address' => 'Jl. Kenanga No. 2',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-02',
        'order_per_day' => 15,
    ]);

    Bakery::create([
        'user_id' => 3,
        'name' => 'Butter Bliss',
        'email' => 'butterbliss@gmail.com',
        'phone_number' => '081234567803',
        'description' => 'Croissant dan pastry premium',
        'address' => 'Jl. Mawar No. 3',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-03',
        'order_per_day' => 10,
    ]);

    Bakery::create([
        'user_id' => 4,
        'name' => 'Sugar Bloom',
        'email' => 'sugarbloom@gmail.com',
        'phone_number' => '081234567804',
        'description' => 'Dessert manis dengan tampilan estetik',
        'address' => 'Jl. Anggrek No. 4',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-04',
        'order_per_day' => 18,
    ]);

    Bakery::create([
        'user_id' => 5,
        'name' => 'Daily Dough',
        'email' => 'dailydough@gmail.com',
        'phone_number' => '081234567805',
        'description' => 'Roti harian lembut dan terjangkau',
        'address' => 'Jl. Dahlia No. 5',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-05',
        'order_per_day' => 20,
    ]);

    Bakery::create([
        'user_id' => 6,
        'name' => 'Moonlight Bakery',
        'email' => 'moonlight@gmail.com',
        'phone_number' => '081234567806',
        'description' => 'Bakery spesialis PO malam hari',
        'address' => 'Jl. Teratai No. 6',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-06',
        'order_per_day' => 8,
    ]);

    Bakery::create([
        'user_id' => 7,
        'name' => 'Crumb Corner',
        'email' => 'crumbcorner@gmail.com',
        'phone_number' => '081234567807',
        'description' => 'Cookies dan brownies homemade',
        'address' => 'Jl. Flamboyan No. 7',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-07',
        'order_per_day' => 14,
    ]);

    Bakery::create([
        'user_id' => 8,
        'name' => 'Heavenly Bites',
        'email' => 'heavenlybites@gmail.com',
        'phone_number' => '081234567808',
        'description' => 'Dessert premium untuk event spesial',
        'address' => 'Jl. Kamboja No. 8',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-08',
        'order_per_day' => 9,
    ]);

    Bakery::create([
        'user_id' => 9,
        'name' => 'Soft Crumbs',
        'email' => 'softcrumbs@gmail.com',
        'phone_number' => '081234567809',
        'description' => 'Roti lembut tanpa pengawet',
        'address' => 'Jl. Anyelir No. 9',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-09',
        'order_per_day' => 16,
    ]);

    Bakery::create([
        'user_id' => 10,
        'name' => 'Bake & Take',
        'email' => 'bakentake@gmail.com',
        'phone_number' => '081234567810',
        'description' => 'Bakery cepat saji dan praktis',
        'address' => 'Jl. Sakura No. 10',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-10',
        'order_per_day' => 22,
    ]);

    Bakery::create([
        'user_id' => 11,
        'name' => 'Cloud Nine Bakery',
        'email' => 'cloudnine@gmail.com',
        'phone_number' => '081234567811',
        'description' => 'Cake lembut seperti awan',
        'address' => 'Jl. Cemara No. 11',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-11',
        'order_per_day' => 11,
    ]);

    Bakery::create([
        'user_id' => 12,
        'name' => 'Honey Crust',
        'email' => 'honeycrust@gmail.com',
        'phone_number' => '081234567812',
        'description' => 'Roti madu dengan rasa khas',
        'address' => 'Jl. Pinus No. 12',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-12',
        'order_per_day' => 13,
    ]);

    Bakery::create([
        'user_id' => 13,
        'name' => 'Urban Oven',
        'email' => 'urbanoven@gmail.com',
        'phone_number' => '081234567813',
        'description' => 'Bakery modern gaya urban',
        'address' => 'Jl. Akasia No. 13',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-13',
        'order_per_day' => 17,
    ]);

    Bakery::create([
        'user_id' => 14,
        'name' => 'Little Whisk',
        'email' => 'littlewhisk@gmail.com',
        'phone_number' => '081234567814',
        'description' => 'Bakery kecil dengan rasa besar',
        'address' => 'Jl. Lavender No. 14',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-14',
        'order_per_day' => 7,
    ]);

    Bakery::create([
        'user_id' => 15,
        'name' => 'Rise & Bake',
        'email' => 'riseandbake@gmail.com',
        'phone_number' => '081234567815',
        'description' => 'Roti pagi fresh setiap hari',
        'address' => 'Jl. Tulip No. 15',
        'bakery_type_id' => 2,
        'pickup_date' => '2026-05-15',
        'order_per_day' => 19,
    ]);

    }
}
