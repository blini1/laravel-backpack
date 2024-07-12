<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['body', 'reviewable_id', 'reviewable_type'];

    public function reviewable()
    {
        return $this->morphTo();
    }
}
