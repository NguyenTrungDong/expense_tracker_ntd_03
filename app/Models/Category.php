<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory,SoftDeletes;
    protected $fillable =
    [
        'name',
        'image',
        'description',
        'date',
    ];

    public function transaction()
    {
        return $this->hasMany(Transaction::class,'transaction_id');
    }
}
