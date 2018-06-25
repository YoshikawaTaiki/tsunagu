<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'users_info';

    protected $fillable = ['user_id', 'language', 'country'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
