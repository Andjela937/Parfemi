<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompanija extends Model
{
    //use HasFactory;
    protected $table = "kompanija";
    public $timestamps = false;

    public function parfemi()
    {
        return $this->hasMany(Parfem::class);
    }
}
