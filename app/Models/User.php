<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Order;
use App\Models\CakeType;
use App\Models\Bakery;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'full_name',
        'phone_number',
        'cake_type_id',
        'image_path',
        'email',
        'password',
    ];

    // public function bakeries_users()
    // {
    //     return $this->hasMany(BakeryUser::class);
    // }

    public function bakery(){
        return $this->hasOne(Bakery::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function cake_type()
    {
        return $this->belongsTo(CakeType::class);
    }

    public function isAdmin(){
        return (bool) $this->is_admin;
    }

    public function isBakeryOwner(int $id){
        return $this->bakeries_users()->where('bakery_id', $id)->exists();
    }

    public function isCustomer(int $id){
        return !$this->is_admin && ! $this->isBakeryOwner($id);
    }

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
}
