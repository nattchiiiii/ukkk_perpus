<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Buku extends Model
{
    use HasFactory;
    {
        return $this->hasMany(Buku::class);
    }
}
