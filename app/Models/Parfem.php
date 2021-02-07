<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parfem extends Model
{
    //use HasFactory;
    protected $table = "parfem";
    public $timestamps = false;

    public function kompanija()
    {
        return $this->belongsTo(Kompanija::class);
    }
}
