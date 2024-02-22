<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDetail extends Model
{
    use HasFactory;
    protected $table = 'category_details';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function books() {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
