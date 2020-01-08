<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppSettings extends Model
{

    public function appClients(){
        return $this->hasMany(AppClients::class);
    }

}
