<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'functional_definition',
        'technical_definition',
        'department_id',
        'source_id',
        'privacy_id',
        'added_by_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
        The attributes that are NOT mass assignable.
     **/
    protected $guarded = [
        'moved_to_pending_id',
        'approved_id',
        'moved_to_inactive_id',
        'status_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date_added' => 'datetime',
        'date_pending' => 'datetime',
        'date_approved' => 'datetime',
        'date_inactive' => 'datetime',
        'last_modified' => 'datetime',
        'is_active' => 'boolean',
    ];
}
