<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yorum extends Model
{
    //
    public function yazi()
    {
        # code...
        return $this->belongsTo("App\Yazi");
    }
}
