<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HashtagMap extends Model
{
    protected $table = "hashtag_map";

    protected $fillable = ['hashtag_id', 'post_id'];

    public function hashtag()
    {
        return $this->belongsTo('App\Hashtag');
    }
}
