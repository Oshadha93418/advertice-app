<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Adverticements extends Model
{
    
    use Notifiable;

    protected $dates = ['deleted_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','discription','status','user_id','cat_id','user_sub_id'
    ];
    
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function categories()
    {
        return $this->hasOne('App\AdverticeCategories', 'id', 'cat_id');
    }
    public function usersubscriptions()
    {
        return $this->hasOne('App\UserSubcription', 'id', 'user_sub_id');
    }
}
