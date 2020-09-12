<?php

namespace Modules\Base\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Base\Traits\FilterTrait;

class BaseModel extends Model
{
    use FilterTrait, SoftDeletes;

    /** @var bool false
     * Disabled timestamps
     */
    public $timestamps = false;
     /**
     * Set column date type.
     *
     * @var protected $dates
     */
    protected $dates = ['deleted_at'];

    protected $hidden = ['deleted_at'];

}
