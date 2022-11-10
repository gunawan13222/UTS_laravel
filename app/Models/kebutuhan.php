<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kebutuhan extends Model
{
    public $fillable =['id','jenis_kebutuhan','kebutuhan','deskripsi','foto'];
    public $timestamps = true;
    use HasFactory;
}
