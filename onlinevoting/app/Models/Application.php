<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table='appliation';
    protected $primaryKey='id';
    public $timestamps=false;
    use HasFactory;
}
