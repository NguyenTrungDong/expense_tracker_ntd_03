<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory,SoftDeletes;
    protected $fillable =
    [
        'user_id',
        'category_id',
        'amount',
        'type',
        'description',
        'date',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}   
