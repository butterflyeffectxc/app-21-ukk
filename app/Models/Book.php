<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function categories() {
        return $this->belongsToMany(Category::class, 'category_details', 'book_id', 'category_id');
    }
    
    public function borrowings() {
        return $this->hasOne(Borrowing::class, 'id', 'book_id');
    }

    public function collections() {
        return $this->hasOne(Collection::class, 'id', 'book_id');
    }
    public function reviews() {
        return $this->hasOne(Review::class, 'id', 'book_id');
    }
}
