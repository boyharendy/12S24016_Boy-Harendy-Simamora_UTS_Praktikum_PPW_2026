<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

            $srv = Categories::create(['name' => 'Server & Cloud', 'code' => 'SRV']);
            $iot = Categories::create(['name' => 'Internet of Things', 'code' => 'IOT']);
            $drn = Categoryies::create(['name' => 'Multimedia & Drone', 'code' => 'DRN']);

        Equipments::create([
            'category_id'       => $srv->id,
            'asset_code'        => 'EQ-SRV-001',
            'name'              => 'power Server',
            'specification'     => 'Intel',
            'condition'         => 'baik',
            'status'            => 'dipinjam',
            'daily_rental_fee'  => 75000,
            'image_path'        => null,
        ]);

        Equipments::create([
            'category_id'       => $srv->id,
            'asset_code'        => 'EQ-SRV-002',
            'name'              => 'HP 2026',
            'specification'     => 'Intel Pentium ',
            'condition'         => 'rusak_ringan',
            'status'            => 'dalam_perbaikan',
            'daily_rental_fee'  => 45000,
            'image_path'        => null,
        ]);

        Equipments::create([
            'category_id'       => $iot->id,
            'asset_code'        => 'EQ-IOT-001',
            'name'              => 'NVIDIA 3050',
            'specification'     => '6GB LPDDR 5',
            'condition'         => 'baik',
            'status'            => 'tersedia',
            'daily_rental_fee'  => 30000,
            'image_path'        => null,
        ]);

        Equipments::create([
            'category_id'       => $iot->id,
            'asset_code'        => 'EQ-IOT-002',
            'name'              => 'IoT Sensor ',
            'specification'     => 'Dual Core Wi-Fi',
            'condition'         => 'baik',
            'status'            => 'tersedia',
            'daily_rental_fee'  => 10000,
            'image_path'        => null,
        ]);

        Equipments::create([
            'category_id'       => $drn->id,
            'asset_code'        => 'EQ-DRN-001',
            'name'              => 'huwawei dron',
            'specification'     => '4K/60fps Camera, small',
            'condition'         => 'baik',
            'status'            => 'tersedia',
            'daily_rental_fee'  => 50000,
            'image_path'        => null,
        ]);

        Equipments::create([
            'category_id'       => $drn->id,
            'asset_code'        => 'EQ-DRN-003',
            'name'              => 'mosquito dron',
            'specification'     => 'kecil, cepat, dan dapat memantau nyamuk',
            'condition'         => 'baik',
            'status'            => 'tersedia',
            'daily_rental_fee'  => 25000,
            'image_path'        => null,
        ]);
    }
}
