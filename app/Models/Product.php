<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'nomi',
        'narxi',
        'tasnifi',
        'photo'
    ];//to'ldirilishi shart bulgan maydonlar

    // protected $guarded=['id']; himoyalangan maydonlaar; ProductControllerda istagan maydon qo'shish mumkin


    public  function user() //product userga tegishli
    {
        return $this->belongsTo(User::class);
    }
    public function favourite()
    {
        return $this->belongsTo(Favourite::class);
    }

    public function comments() //productda bir nechta commentlar bor
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

