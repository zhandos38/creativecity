<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactUpdateRequest extends FormRequest
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
            'content_ru' => 'required|max:10000',
            'content_kz' => 'required|max:10000',
            'content_en' => 'required|max:10000',
            'type' => 'required|in:phone,email,address,instagram,fb,vk,whatsapp,cabinet,text,presentation',
        ];
    }
}
