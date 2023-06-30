<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Rol extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "roles";

    public function Users(){
        return $this->hasMany(User::class);
    }
}
