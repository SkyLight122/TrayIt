<?php

namespace Database\Seeders;

use App\Models\Bakery;
use Illuminate\Database\Seeder;

class BakerySeeder extends Seeder
{
    public function run(): void
    {
        Bakery::create([
            'user_id' => 1,
            'name' => 'Golden Crust Bakery',
            'email' => 'goldencrust@gmail.com',
            'phone_number' => '081234567801',
            'description' => 'Bakery rumahan dengan roti fresh setiap pagi.',
            'bakery_type_id' => 1,
            'pickup_date' => '2026-05-01 08:00:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery1.jpg',
            'logo_path' => null,
            'order_per_day' => 15,
            'bakery_template_id' => 1,
            'primary_color' => '#88481E',
            'secondary_color' => '#FFF8F0',
            'accent_color' => '#D4A373',
            'visitors' => 120,
        ]);

        Bakery::create([
            'user_id' => 2,
            'name' => 'Sweet Oven',
            'email' => 'sweetoven@gmail.com',
            'phone_number' => '081234567802',
            'description' => 'Spesialis cake ulang tahun dan dessert box premium.',
            'bakery_type_id' => 2,
            'pickup_date' => '2026-05-02 09:00:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery2.jpg',
            'logo_path' => null,
            'order_per_day' => 20,
            'bakery_template_id' => 2,
            'primary_color' => '#E85D75',
            'secondary_color' => '#FFF0F3',
            'accent_color' => '#FFB3C6',
            'visitors' => 250,
        ]);

        Bakery::create([
            'user_id' => 3,
            'name' => 'Butter Bliss',
            'email' => 'butterbliss@gmail.com',
            'phone_number' => '081234567803',
            'description' => 'Croissant dan pastry artisan dengan butter premium.',
            'bakery_type_id' => 3,
            'pickup_date' => '2026-05-03 07:30:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery3.jpg',
            'logo_path' => null,
            'order_per_day' => 12,
            'bakery_template_id' => 3,
            'primary_color' => '#CBA135',
            'secondary_color' => '#FFF9E3',
            'accent_color' => '#8D6E63',
            'visitors' => 98,
        ]);

        Bakery::create([
            'user_id' => 4,
            'name' => 'Sugar Bloom',
            'email' => 'sugarbloom@gmail.com',
            'phone_number' => '081234567804',
            'description' => 'Dessert estetik dengan konsep modern minimalis.',
            'bakery_type_id' => 2,
            'pickup_date' => '2026-05-04 10:00:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery4.jpg',
            'logo_path' => null,
            'order_per_day' => 18,
            'bakery_template_id' => 1,
            'primary_color' => '#F28482',
            'secondary_color' => '#FFE5EC',
            'accent_color' => '#F6BD60',
            'visitors' => 310,
        ]);

        Bakery::create([
            'user_id' => 5,
            'name' => 'Daily Dough',
            'email' => 'dailydough@gmail.com',
            'phone_number' => '081234567805',
            'description' => 'Roti harian lembut dan harga terjangkau.',
            'bakery_type_id' => 1,
            'pickup_date' => '2026-05-05 06:30:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery5.jpg',
            'logo_path' => null,
            'order_per_day' => 25,
            'bakery_template_id' => 2,
            'primary_color' => '#6D6875',
            'secondary_color' => '#F2E9E4',
            'accent_color' => '#B5838D',
            'visitors' => 415,
        ]);

        Bakery::create([
            'user_id' => 6,
            'name' => 'Moonlight Bakery',
            'email' => 'moonlight@gmail.com',
            'phone_number' => '081234567806',
            'description' => 'Bakery spesialis pre-order malam hari.',
            'bakery_type_id' => 3,
            'pickup_date' => '2026-05-06 19:00:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery6.jpg',
            'logo_path' => null,
            'order_per_day' => 9,
            'bakery_template_id' => 3,
            'primary_color' => '#2E4057',
            'secondary_color' => '#E5E5E5',
            'accent_color' => '#F4D35E',
            'visitors' => 87,
        ]);

        Bakery::create([
            'user_id' => 7,
            'name' => 'Crumb Corner',
            'email' => 'crumbcorner@gmail.com',
            'phone_number' => '081234567807',
            'description' => 'Cookies dan brownies homemade favorit keluarga.',
            'bakery_type_id' => 2,
            'pickup_date' => '2026-05-07 08:30:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery7.jpg',
            'logo_path' => null,
            'order_per_day' => 14,
            'bakery_template_id' => 1,
            'primary_color' => '#7F5539',
            'secondary_color' => '#FDF0D5',
            'accent_color' => '#E36414',
            'visitors' => 176,
        ]);

        Bakery::create([
            'user_id' => 8,
            'name' => 'Heavenly Bites',
            'email' => 'heavenlybites@gmail.com',
            'phone_number' => '081234567808',
            'description' => 'Dessert premium untuk event dan wedding.',
            'bakery_type_id' => 3,
            'pickup_date' => '2026-05-08 09:30:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery8.jpg',
            'logo_path' => null,
            'order_per_day' => 11,
            'bakery_template_id' => 2,
            'primary_color' => '#5F0F40',
            'secondary_color' => '#F1E3F3',
            'accent_color' => '#9A031E',
            'visitors' => 230,
        ]);

        Bakery::create([
            'user_id' => 9,
            'name' => 'Soft Crumbs',
            'email' => 'softcrumbs@gmail.com',
            'phone_number' => '081234567809',
            'description' => 'Roti lembut tanpa pengawet dan fresh setiap hari.',
            'bakery_type_id' => 1,
            'pickup_date' => '2026-05-09 07:00:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery9.jpg',
            'logo_path' => null,
            'order_per_day' => 16,
            'bakery_template_id' => 3,
            'primary_color' => '#3A5A40',
            'secondary_color' => '#DAD7CD',
            'accent_color' => '#A3B18A',
            'visitors' => 140,
        ]);

        Bakery::create([
            'user_id' => 10,
            'name' => 'Bake & Take',
            'email' => 'bakentake@gmail.com',
            'phone_number' => '081234567810',
            'description' => 'Bakery cepat saji untuk pekerja kantoran.',
            'bakery_type_id' => 2,
            'pickup_date' => '2026-05-10 08:00:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery10.jpg',
            'logo_path' => null,
            'order_per_day' => 28,
            'bakery_template_id' => 1,
            'primary_color' => '#1D3557',
            'secondary_color' => '#F1FAEE',
            'accent_color' => '#E63946',
            'visitors' => 500,
        ]);

        Bakery::create([
            'user_id' => 11,
            'name' => 'Cloud Nine Bakery',
            'email' => 'cloudnine@gmail.com',
            'phone_number' => '081234567811',
            'description' => 'Cake lembut seperti awan untuk segala acara.',
            'bakery_type_id' => 3,
            'pickup_date' => '2026-05-11 09:00:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery11.jpg',
            'logo_path' => null,
            'order_per_day' => 13,
            'bakery_template_id' => 2,
            'primary_color' => '#A8DADC',
            'secondary_color' => '#F1FAEE',
            'accent_color' => '#457B9D',
            'visitors' => 190,
        ]);

        Bakery::create([
            'user_id' => 12,
            'name' => 'Honey Crust',
            'email' => 'honeycrust@gmail.com',
            'phone_number' => '081234567812',
            'description' => 'Roti madu khas dengan resep turun-temurun.',
            'bakery_type_id' => 1,
            'pickup_date' => '2026-05-12 06:00:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery12.jpg',
            'logo_path' => null,
            'order_per_day' => 17,
            'bakery_template_id' => 3,
            'primary_color' => '#FFB703',
            'secondary_color' => '#FFF3B0',
            'accent_color' => '#FB8500',
            'visitors' => 165,
        ]);

        Bakery::create([
            'user_id' => 13,
            'name' => 'Urban Oven',
            'email' => 'urbanoven@gmail.com',
            'phone_number' => '081234567813',
            'description' => 'Bakery modern dengan konsep industrial.',
            'bakery_type_id' => 2,
            'pickup_date' => '2026-05-13 10:30:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery13.jpg',
            'logo_path' => null,
            'order_per_day' => 21,
            'bakery_template_id' => 1,
            'primary_color' => '#2B2D42',
            'secondary_color' => '#EDF2F4',
            'accent_color' => '#EF233C',
            'visitors' => 420,
        ]);

        Bakery::create([
            'user_id' => 14,
            'name' => 'Little Whisk',
            'email' => 'littlewhisk@gmail.com',
            'phone_number' => '081234567814',
            'description' => 'Butik kecil dengan cake custom handmade.',
            'bakery_type_id' => 3,
            'pickup_date' => '2026-05-14 08:15:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery14.jpg',
            'logo_path' => null,
            'order_per_day' => 7,
            'bakery_template_id' => 2,
            'primary_color' => '#BC6C25',
            'secondary_color' => '#FEFAE0',
            'accent_color' => '#DDA15E',
            'visitors' => 75,
        ]);

        Bakery::create([
            'user_id' => 15,
            'name' => 'Rise & Bake',
            'email' => 'riseandbake@gmail.com',
            'phone_number' => '081234567815',
            'description' => 'Roti pagi fresh untuk sarapan keluarga.',
            'bakery_type_id' => 1,
            'pickup_date' => '2026-05-15 05:30:00',
            'bakery_thumbnail' => 'portal/bakery/Bakery15.jpg',
            'logo_path' => null,
            'order_per_day' => 24,
            'bakery_template_id' => 3,
            'primary_color' => '#6A994E',
            'secondary_color' => '#F2E8CF',
            'accent_color' => '#A7C957',
            'visitors' => 350,
        ]);
    }
}