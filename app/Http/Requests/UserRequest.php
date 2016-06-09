<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /*formulario de validacion  de usuarios en email mensaje de error
        cambiado por el default
    */
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //

            'name'      => 'min:4|max:120|required',
            /*validacion correo*/
            'email'     => 'min:4|max:250|required|unique:users',
            'password'  => 'min:5|max:250|alpha_num|alpha|required'


        ];
    }
}
