<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passport extends Model
{
    protected $table = 'passport';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'email',
        'title',
        'lastName',
        'firstName',
        'middleName',
        'contactNumber',
        'maritalStatus',
        'hairColor',
        'eyeColor',
        'identificationMarks',
        'height',
    ];

    public function users()
    {
        return $this->belongTo(User::class, 'user_id', 'id');
    }
}
