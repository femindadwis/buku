<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Penerbit extends Model
{
    use HasFactory;
    protected $table = "penerbit";
    protected $fillable = [
        'name',
    ];
public function buku()
{
    return $this->hasMany(Buku::class);
}
}
