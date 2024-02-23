<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function books(){
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
