<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;
    
    protected $table = 'user_group';

    protected $fillable = [
        'id_user',
        'id_group'
    ];
    
    public $timestamps = false;
}
