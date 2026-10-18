<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'title',
        'code',
        'slug',
        'category',
        'jenjang',
        'badge',
        'short_description',
        'full_description',
        'curriculum',
        'requirements',
        'certification_body',
        'duration',
        'icon',
        'image',
        'topic_key',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'curriculum' => 'array',
        'requirements' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
