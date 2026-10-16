<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appraisal extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_number',
        'status',
        'first_contact_at',
        'staff',
        'area',
        'family_name',
        'tel1',
        'tel2',
        'tel3',
        'experienced',
        'hope_request',
        'sms_log',
        'comment',
    ];

    public function items()
    {
        return $this->hasMany('App\Models\Item', 'appraisal_id', 'id');
    }
}
