<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admissions extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public function application(){
        return $this->hasOne(Application::class, 'admissions_id', 'id');
    }
}
