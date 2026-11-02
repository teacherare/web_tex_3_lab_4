<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'ism',
        'fam',
        'aloqa',
        'email',
        'ij_tarmoq_turi',
        'ij_tarmoq_manzili',
        'tel',
        'xabar',
        'rasm',
        'file',
    ];

}
