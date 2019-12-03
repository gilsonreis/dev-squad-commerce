<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
