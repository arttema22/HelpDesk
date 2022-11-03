<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketFormRequest extends FormRequest
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
            'first_name' => 'required|max: 255',
            'last_name' => 'required|max: 255',
            'ls' => 'required|numeric|digits: 10',
            'address' => 'required|max: 255',
            'phone' => 'required',
            'email' => 'required|email|max: 255',
            'title' => 'required',
            'message' => 'required',
            'personal-date' => 'accepted',
        ];
    }
}
