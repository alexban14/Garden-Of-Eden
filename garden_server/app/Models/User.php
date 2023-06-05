<?php

namespace App\Models;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'role',
        'name',
        'email',
        'password',
        'email_verified_at'
    ];
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'user_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'user_id');
    }

    public function subscriber(): BelongsTo
    {
        return $this->belongsTo(Subscriber::class, 'user_id');
    }

    public function prize(): HasMany
    {
        return $this->hasMany(Prize::class, 'user_id');
    }

    public function contactUsInfo(): HasMany
    {
        return $this->hasMany(ContactUsInfo::class, 'user_id');
    }

    public function specialistBookings(): HasMany
    {
        return $this->hasMany(SpecialistBooking::class, 'user_id');
    }

    public function getAuthIdentifierName(): string
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        return $this->remember_token = $value;
    }

    public function getRememberTokenName(): string
    {
        return 'remember_token';
    }

    public function getEmailForPasswordReset()
    {
        return $this->email;
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function hasVerifiedEmail(): bool
    {
        return $this->email_verified_at !== null;
    }
}
