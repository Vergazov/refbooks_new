<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RefbookStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'oid' => 'required',
            'version' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name|required' => 'Поле "Имя" обязательно для заполнения',
            'oid|required' => 'Поле "OID" обязательно для заполнения',
            'version|required' => 'Поле "Версия" обязательно для заполнения',
        ];
    }
}
