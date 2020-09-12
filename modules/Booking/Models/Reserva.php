<?php

namespace Modules\Booking\Models;

use Modules\Base\Models\BaseModel;
use Modules\Persona\Models\Guest;

class Reserva extends BaseModel
{
    /**
     * Table columns.
     */
    protected $fillable = [
        'date_reserva',
        'bedroom_id',
        'guest_id',
        'hotel_id',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function bedroom()
    {
        return $this->belongsTo(Bedroom::class);
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}
