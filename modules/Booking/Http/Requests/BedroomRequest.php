<?php

namespace Modules\Booking\Http\Requests;

use Modules\Base\Http\Requests\BaseFormRequest;

class BedroomRequest extends BaseFormRequest
{
    /**
     * Performs specific validation rules for the requisition.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'               => 'required|max:255',
            'count_bed'          => 'required',
            'count_people'       => 'required',
            'city_id'            => 'required|exists:cities,id',
            'hotel_id'           => 'required|exists:hotels,id',
        ];
    }
}
