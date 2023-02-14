<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'rol_name',
        'description',
    ];
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
