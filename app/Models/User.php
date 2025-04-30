<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use COM;
use Carbon\Carbon;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'occupation',
        'avatar',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_students', 'user_id', 'course_id');
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function subscribe_transactions()
    {
        return $this->hasMany(SubscribeTransaction::class);
    }

    public function hasActiveSubscription(){
        $latestSubscription = $this->subscribe_transactions()
        ->where('is_paid', true)
        ->latest('updated_at')
        ->first();

        if(!$latestSubscription){
            return false;
        }
        $subscriptionEndDate = Carbon::parse($latestSubscription->subscription_start_date)
        ->addMonths(1);
        return Carbon::now()->lessThanOrEqualTo($subscriptionEndDate);
    }
}
