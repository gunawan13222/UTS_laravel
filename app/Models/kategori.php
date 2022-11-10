<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public $fillable =['id','kategori','urgensi'];
    public $timestamps = true;
    use HasFactory;
}
