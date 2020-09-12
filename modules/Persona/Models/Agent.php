<?php

namespace Modules\Persona\Models;

use Modules\Base\Models\BaseModel;

class Agent extends BaseModel
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
