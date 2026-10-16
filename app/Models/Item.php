<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'appraisal_id',
        'title',
        'image',
        'category',
        'condition_customer',
        'condition_seller',
        'brand',
        'maker',
        'price',
        'is_visible',
        'memo',
    ];

    public function appraisal()
    {
        return $this->belongsTo('App\Models\Appraisal', 'appraisal_id', 'id');
    }
}
