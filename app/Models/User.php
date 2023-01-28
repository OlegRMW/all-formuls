<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formul;

class User extends Model
{
    use HasFactory;

    public function formuls(){
        return $this->belongsToMany(Formul::class, 'favorites', 'user_id', 'formul_id');
    }


}
