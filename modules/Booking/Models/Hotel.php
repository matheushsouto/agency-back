<?php

namespace Modules\Booking\Models;

use Modules\Base\Models\BaseModel;

class Hotel extends BaseModel
{
    /**
     * Table columns.
     */
    protected $fillable = [
        'name',
        'cnpj',
        'email',
        'city_id',
    ];
}
