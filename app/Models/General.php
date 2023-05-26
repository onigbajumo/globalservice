<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $table = 'general';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'email',
        'applicationType',
        'passportNumber',
        'passportBookletType',
        'title',
        'surname',
        'firstName',
        'middleName',
        'dob',
        'placeOfBirth',
        'gender',
        'maritalStatus',
        'occupation',
        'motherMaidenName',
        'ninNumber',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
