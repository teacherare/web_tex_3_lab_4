<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteEvaluation extends Model
{
    protected $fillable = [
        'name',
        'contact_info',
        'photo',
        'user_level',
        'evaluation_sections',
        'feedback',
        'content_rating',
        'design_rating',
        'functionality_rating',
    ];
    protected function casts(): array
    {
        return ['evaluation_sections' => 'array',];
    }
}
