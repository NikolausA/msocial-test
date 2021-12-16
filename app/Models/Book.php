<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = ['name', 'price'];

    public function authors() 
    {
        return $this->belongsToMany(Author::class);
    }
}
