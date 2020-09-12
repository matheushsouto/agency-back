<?php

namespace Modules\Persona\Models;

use Modules\Base\Models\BaseModel;

class Guest extends BaseModel
{
    /**
     * Table columns.
     */
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'city_id',
    ];
}
