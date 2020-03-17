<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function accesses(){
        return $this->hasOne(Accesses::class);
    }
}
