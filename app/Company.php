<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected  $fillable =
        [
            'name',
            'address',
            'phone_number',
            'email',
            'website',
            'mission',
            'vision',
            'core_values'
        ];

    public function departments()
    {
        return $this->hasMany('App\Departments');
    }
}
