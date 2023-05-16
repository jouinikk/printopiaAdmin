<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;
    protected $table = 'panier';
    protected $primaryKey = 'id';
    protected $fillable=[
        'client_id',
        'produit_id',
        'qtt'
    ]; 
}
