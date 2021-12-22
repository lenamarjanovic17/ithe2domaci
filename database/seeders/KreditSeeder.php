<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kredit;
class KreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kredit::factory()->count(5)->create();
    }
    
}
