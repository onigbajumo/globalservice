<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NIN extends Model
{
    use HasFactory;
    protected $table = 'n_i_n_s';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'email',
        'bvn',
        'appointmentDate',
        'appointmentLocation',
        'appointmentTime',
        'ukMobileNumber',
        'title',
        'lastName',
        'firstName',
        'middleName',
        'otherName',
        'maidenName',
        'permanentAddress',
        'dob',
        'countryOfBirth',
        'stateOfBirth',
        'stateOfOrigin',
        'lgaOfOrigin',
        'townOfOrigin',
        'gender',
        'height',
        'nationality',
        'residenceStatus',
        'maritalStatus',
        'religion',
        'telephoneNumber',
        'guardianSurname',
        'guardianFirstName',
        'guardianMiddleName',
        'guardianNin',
    ];




    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
