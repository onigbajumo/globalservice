<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Visa extends Model
{
    use HasFactory;
    protected $table = "visas";
    protected $fillable = ['nationality', 'passport_type', 'visa_type', 'visa_class', 'title', 'surname', 'first_name', 'middle_name', 'dob', 'pofB', 'gender', 'marital_status', 'emailAddress', 'phoneNumber', 'passportNumber', 'passportExpiryDate', 'previousNationality', 'occupation' ];


public function users()
{
    return $this->belongTo(User::class, 'user_id', 'id');
}
}
