<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;
    protected $table = 'réclamations';
    protected $primaryKey = 'id';
    protected $fillable=[
        'subject',
        'msg',
        'user_id'
    ];
}
