<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body','img','user_id', 'category',
    ];

    // many to one
    //  Abbiamo definito un metodo che si chiama come il modello con cui è relazionato al singolare con la lettera minuscola
    public function user() // generare un nuovo attributo chiamato come il nome di questo metodo
    {
             return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
