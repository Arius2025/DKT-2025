<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;
class BeritaSeeder extends Seeder
{
    public function run()
{
    Berita::factory()->count(5)->create();
}
}
