<?php

namespace Modules\Booking\Models;

use Modules\Base\Models\BaseModel;

class Bedroom extends BaseModel
{
    /**
     * Table columns.
     */
    protected $fillable = [
        'name',
        'count_bed',
        'count_people',
        'city_id',
        'hotel_id'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
