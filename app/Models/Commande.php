<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $table = 'commande';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id',
        'panier_id',
        'etat'
    ];
}
