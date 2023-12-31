<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{

    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'country_id',
        'state_id',
        'department_id',
        'city_id',
        'zip_code',
        'birthdate',
        'date_hired',
    ];

    protected $casts = [
        'birthdate' => 'datetime:Y-m-d',
        'date_hired' => 'datetime:Y-m-d',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

}
