<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'professional_id', 'certification_name', 'issuing_authority', 
        'date_issued', 'expiration_date', 'certification_pdf',
    ];

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }
}

