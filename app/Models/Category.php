<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable= [
        'name', 'description', 'img'
    ];

    public function articles(){
        return $this->hasMany(User::class);
    }
}
