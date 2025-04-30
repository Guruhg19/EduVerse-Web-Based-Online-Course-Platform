<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubscribeTransaction extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'total_amount',
        'is_paid',
        'subscription_start_date',
        'proof',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
