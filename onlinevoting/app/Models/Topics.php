<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    protected $table='topics';
    protected $primaryKey='id';
    use HasFactory;
}
