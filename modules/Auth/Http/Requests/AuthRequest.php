<?php

namespace Modules\Client\Http\Requests;
use Modules\Base\Http\Requests\BaseFormRequest;

/**
 * Class AddressRequest
 *
 * A classe estende BaseFormRequest
 * @package BaseFormRequest
 *
 */
class AuthRequest extends BaseFormRequest
{
    /**
     * Realiza regras de validações especificas para a requisição.
     *
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'recipient_name'                => 'required',
//            'street'                        => 'required',
//            'number'                        => 'required',
//            'complement'                    => 'required',
//            'district'                      => 'required',
//            'reference_place'               => 'nullable',
//            'zipcode'                       => 'required',
//            'billing'                       => 'nullable',
//            'address_type_id'               => 'required',
//            'user_id'                       => 'required',
//            'city_id'                       => 'required',
        ];
    }
}
