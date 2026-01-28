<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LicenseActivation extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_id',
        'device_name',
        'device_id',
        'ip_address',
        'activated_at',
        'last_used_at',
        'deactivated_at',
    ];

    protected $casts = [
        'activated_at' => 'datetime',
        'last_used_at' => 'datetime',
        'deactivated_at' => 'datetime',
    ];

    public function license(): BelongsTo
    {
        return $this->belongsTo(License::class);
    }
}
