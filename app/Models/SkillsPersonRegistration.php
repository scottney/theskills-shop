<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsPersonRegistration extends Model
{
    use HasFactory;

    protected $table = 'skills_person_registration';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'surname',
        'middle_name',
        'id_number',
        'skills_person_service_number',
        'phone_number',
        'alternative_phone_number',
        'skills_person_email',
        'address',
        'skillset',
        'skillset_description',
        'image',
        'report',
        'letters',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
    ];
}
