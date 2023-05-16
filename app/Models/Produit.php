<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $primaryKey = 'id';
    protected $fillable=[
        'Type_id',
        'image',
        'qttProduit',
        'prixProduit',
        'description',
        'formeP'
    ];
}
