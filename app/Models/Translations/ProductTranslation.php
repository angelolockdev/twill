<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;

class ProductTranslation extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'color',
        'weight',
        'price', 
        'active',
        'locale',
    ];

    protected $attributes = [
        'price' => 0,
    ];
}
