<?php

namespace App\Models;

use App\Traits\AutoUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory, AutoUUID;

    protected $table = 'genders';

    protected $fillable = [
        'name',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'gender_id', 'id');
    }
}
