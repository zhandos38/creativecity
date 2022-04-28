<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserUpdateRequest extends FormRequest
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
        return [
            'name'                  => "required|max:255",
            'email'                 => "required|string|email|max:255|unique:users,email,{$this->user->id}",
            'password'              => "nullable|string|min:8|confirmed",
            'password_confirmation' => "nullable",
            'image'                 => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ];
    }
}
