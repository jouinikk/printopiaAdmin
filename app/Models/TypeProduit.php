<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProduit extends Model
{
    use HasFactory;
    protected $table = 'typeproduit';
    protected $primaryKey = 'id';
    protected $fillable=[
        'type',
        'qtt',
        'prix',
    ];
}
