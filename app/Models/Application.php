<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['application_id'];
    use HasFactory;
}
