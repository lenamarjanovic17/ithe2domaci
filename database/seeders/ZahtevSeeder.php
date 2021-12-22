<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zahtev;

class ZahtevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zahtev::factory()->count(8)->create();
    }
}
