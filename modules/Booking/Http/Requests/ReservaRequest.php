<?php

namespace Modules\Booking\Http\Requests;

use Modules\Base\Http\Requests\BaseFormRequest;

class ReservaRequest extends BaseFormRequest
{
    /**
     * Performs specific validation rules for the requisition.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date_reserva'       => 'required|date',
            'bedroom_id'         => 'required|exists:bedrooms,id',
            'guest_id'            => 'required|exists:guests,id',
            'hotel_id'           => 'required|exists:hotels,id',
        ];
    }
}
