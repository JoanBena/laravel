<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdateCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('manage-courses');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'course_code' => [
                'required', 'integer'
            ],
            'name_course' => [
                'required', 'string'
            ],
            'number_credit' => [
                'required', 'integer'
            ],
            'name_prof' => [
                'required', 'string'
            ]
        ];
    }
}
