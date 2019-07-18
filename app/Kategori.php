<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    public function yazi()
    {
        # code...
        return $this->hasMany("App\Yazi");
    }
}
