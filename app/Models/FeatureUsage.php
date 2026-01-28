<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeatureUsage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subscription_id',
        'feature_id',
        'usage_count',
        'period_start',
        'period_end',
    ];

    protected $casts = [
        'usage_count' => 'integer',
        'period_start' => 'datetime',
        'period_end' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }

    public function feature(): BelongsTo
    {
        return $this->belongsTo(Feature::class);
    }
}
