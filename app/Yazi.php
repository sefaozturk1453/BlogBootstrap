<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yazi extends Model
{
    //
    public function kategori()
    {
        # code...
        return $this->belongsTo("App\Kategori");
    }

    public function yorum()
    {
        # code...
        return $this->hasMany("App\Yorum");
    }
}
