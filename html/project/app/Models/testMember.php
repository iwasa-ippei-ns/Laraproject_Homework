<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testMember extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function department()
    {
        return $this->belongsTo('App\Models\departmentId', 'department_id', 'department_id');
    }
}
