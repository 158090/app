<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    //
    protected $table = "comments";

    public function articles() {
        return $this->belongsTo('App\Article');
    }

}
