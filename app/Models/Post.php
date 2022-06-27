<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'excerpt',
    //     'body',
    //     'category_id'
    // ];
    
    protected $with = ['author', 'category'];    

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id'); 
        // especificando chave estrangeira no relacionamento devido o nome do metodo ser diferente do nome na chave estrangeira
    }
}
