<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersBooking extends Model
{
    use HasFactory;

    protected $table = 'customers_booking';
    
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
        'customers_service_number',
        'phone_number',
        'alternative_phone_number',
        'email',
        'address',
        'services',
        'service_required',
        'service_date',
        'service_time',
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
