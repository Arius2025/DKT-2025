<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    return [
        'judul' => $this->faker->sentence,
        'isi' => $this->faker->paragraph(5),
        'gambar' => 'dummy.jpg',
    ];
