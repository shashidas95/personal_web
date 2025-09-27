<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_title',
        'company',
        'location',
        'start_date',
        'end_date',
        'description',
        'type',
        'degree',
        'field_of_study'
    ];
  
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    // Treat these columns as Carbon instances
    protected $dates = [
        'start_date',
        'end_date',
    ];

    // OR in Laravel 8+ (recommended):
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    // Accessors for clean date formatting
    public function getFormattedStartDateAttribute()
    {
        return $this->start_date->format('M Y'); // e.g., Jan 2018
    }

    public function getFormattedEndDateAttribute()
    {
        return $this->end_date ? $this->end_date->format('M Y') : 'Present'; // e.g., Dec 2020 or Present
    }
}
