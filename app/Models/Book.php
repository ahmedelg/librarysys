<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
    'book_id',
    'book_name',
    'book_author',
    'book_edition',
    'created_at',
    'updated_at',
  ];  
  public function user()
  {
    return $this->belongsToMany('App\User');
  }
}
