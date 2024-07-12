<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
}
