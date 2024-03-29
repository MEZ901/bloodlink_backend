<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'date' => 'sometimes|required|date',
            'status' => 'sometimes|required|string',
            'user_id' => 'sometimes|required|integer',
            'blood_drive_id' => 'nullable|integer',
            'hospital_id' => 'nullable|integer',
        ];
    }
}
