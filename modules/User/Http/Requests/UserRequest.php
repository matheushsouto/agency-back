<?php

namespace Modules\User\Http\Requests;

use Modules\Base\Http\Requests\BaseFormRequest;

class UserRequest extends BaseFormRequest
{
    /**
     * Performs specific validation rules for the requisition.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login'             => 'required|max:120',
            'password'          => 'required',
            'status'            => 'nullable|int',
            'permission_id'     => 'required',
        ];
    }
}
