<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserSubcription extends Model
{
    use Notifiable;

    protected $dates = ['deleted_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','sub_id'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function SubscriptionPlans()
    {
        return $this->hasOne('App\SubscriptionPlans', 'id', 'sub_id');
    }
}
