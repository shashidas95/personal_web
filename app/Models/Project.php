<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'start_date',
        'end_date',
        'status',
        'image_path',
    ];
    // protected $dates = [
    //     'created_at',
    //     'updated_at',
    //     'start_date',
    //     'end_date'
    // ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $dates = [
        'start_date',
        'end_date',
    ];

    // OR in Laravel 8+ (recommended):
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    // Accessors are now safe
    public function getFormattedStartDateAttribute()
    {
        return $this->start_date->format('M Y');
    }

    public function getFormattedEndDateAttribute()
    {
        return $this->end_date ? $this->end_date->format('M Y') : 'Present';
    }
}
