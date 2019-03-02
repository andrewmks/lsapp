<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    // Table Name (just for reference)
    protected $table = 'posts';

    //Primary Key
    public $primaryKey = 'id';
    # public $primaryKey = 'item_id';

    //Timestramps (true by default)
    public $timestamps = true; 

    public function user() {
        return $this->belongsTo('App\User');
    }
}
