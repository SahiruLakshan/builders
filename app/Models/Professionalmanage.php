<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professionalmanage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'professional_number',
        'name',
        'profile_image',
        'phone',
        'email',
        'address',
        'district',
        'city',
        'zip',
        'dob',
        'linkedin',
        'job_title',
        'experience_level',
        'years_of_experience',
        'skills',
        'license_number',
        'edited_by',
        'edited_at',
    ];

    /**
     * The user who last edited the professional's record.
     */
    public function editor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'edited_by');
    }

    /**
     * Get the edited_at attribute in a more human-readable format.
     */
    public function getEditedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y H:i:s');
    }

}
