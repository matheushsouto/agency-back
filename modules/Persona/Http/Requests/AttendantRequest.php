<?php

namespace Modules\Persona\Http\Requests;

use Modules\Base\Http\Requests\BaseFormRequest;

class AttendantRequest extends BaseFormRequest
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
            'cpf'                => 'required|cpf',
            'email'              => 'required|email',
            'city_id'            => 'required|exists:cities,id'
        ];
    }
}
