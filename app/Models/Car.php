<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['make', 'model', 'year'];

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
}
