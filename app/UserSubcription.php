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
        return $this->belongsTo('App\User');
    }
    public function SubscriptionPlans()
    {
        return $this->belongsTo('App\SubscriptionPlans', 'id', 'sub_id');
    }
}
