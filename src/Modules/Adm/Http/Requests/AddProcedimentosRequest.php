<?php

namespace Modules\Adm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProcedimentosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $array = [
            'dsprocedimentos' => 'required|max:200',
            'flpacote' => 'required|in:s,n',
            'vlprocedimento' => 'required',
            'stprocedimento' => 'required',
            'tempoprocedimento' => 'required',
            'idpacote' => 'in:s,n',
        ];

        return $array;
    }

    public function attributes()
    {
        return [

        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [

        ];
    }
}
