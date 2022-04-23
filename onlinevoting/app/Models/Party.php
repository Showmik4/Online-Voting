<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $table='party';
    protected $primaryKey='id';
    public $timestamps=false;
    use HasFactory;
}
