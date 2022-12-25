<?php

namespace App\Models;

use App\Traits\AutoUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory, AutoUUID;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'email',
        'gender_id',
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }
}
