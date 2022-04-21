<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{

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
        $rules = User::$rules;

        if (request()->isMethod('PUT') || request()->isMethod('PATCH')) {
            $rules['email'] = 'required|email|unique:users,email,' . $this->user;
            $rules['cin'] = 'required|string|size:8|unique:users,cin,' . $this->user;
            return $rules;
        }
    }
}
