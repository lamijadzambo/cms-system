<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function roles(){

        return $this->belongsToMany(\App\Models\Role::class);
    }

    public function users(){

        return $this->belongsToMany(\App\Models\User::class);
    }
}
