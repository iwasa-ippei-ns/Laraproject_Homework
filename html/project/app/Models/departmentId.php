<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departmentId extends Model
{
    use HasFactory;

    public function member()
    {
        return $this->hasMany('App\Models\testMember');
    }
}
