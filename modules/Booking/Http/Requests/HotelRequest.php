<?php

namespace Modules\Booking\Http\Requests;

use Modules\Base\Http\Requests\BaseFormRequest;

class HotelRequest extends BaseFormRequest
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
            'cnpj'               => 'required|cnpj',
            'email'              => 'required|email',
            'city_id'            => 'required|exists:cities,id'
        ];
    }
}
