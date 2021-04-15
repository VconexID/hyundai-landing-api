<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $provinces = [
      ['name' => 'Aceh'],
      ['name' => 'Sumatera Utara'],
      ['name' => 'Sumatera Barat'],
      ['name' => 'Riau'],
      ['name' => 'Jambi'],
      ['name' => 'Sumatera Selatan'],
      ['name' => 'Bengkulu'],
      ['name' => 'Lampung'],
      ['name' => 'Kepulauan Bangka Belitung'],
      ['name' => 'Kepulauan Riau'],
      ['name' => 'DKI Jakarta'],
      ['name' => 'Jawa Barat'],
      ['name' => 'Jawa Tengah'],
      ['name' => 'DI Yogyakarta'],
      ['name' => 'Jawa Timur'],
      ['name' => 'Banten'],
      ['name' => 'Bali'],
      ['name' => 'Nusa Tenggara Barat'],
      ['name' => 'Nusa Tenggara Timur'],
      ['name' => 'Kalimantan Barat'],
      ['name' => 'Kalimantan Tengah'],
      ['name' => 'Kalimantan Selatan'],
      ['name' => 'Kalimantan Timur'],
      ['name' => 'Kalimantan Utara'],
      ['name' => 'Sulawesi Utara'],
      ['name' => 'Sulawesi Tengah'],
      ['name' => 'Sulawesi Selatan'],
      ['name' => 'Sulawesi Tenggara'],
      ['name' => 'Gorontalo'],
      ['name' => 'Sulawesi Barat'],
      ['name' => 'Maluku'],
      ['name' => 'Maluku Utara'],
      ['name' => 'Papua'],
      ['name' => 'Papua Barat'],
    ];

    foreach ($provinces as $province) {
      Province::create([
        'name' => $province['name']
      ]);
    }
  }
}
