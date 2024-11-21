<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'professional_id',
        'certification_name',
        'issuing_authority',
        'date_issued',
        'expiration_date',
        'certification_pdf',
    ];

    /**
     * Get the professional that owns the certification.
     */
    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }
}
