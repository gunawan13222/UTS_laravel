<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    public $fillable =['id','nama','whatsapp','bagian'];
    public $timestamps = true;
    use HasFactory;
}
