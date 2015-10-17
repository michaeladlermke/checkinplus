<?php

namespace App\Http\Requests;

class CourseRequest extends Request
{
    /**
     * Determine if the course is authorized to make this request.
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
        $rules = [
            'course_name' => 'required|min:5',
            'course_section_id' => 'required',
            'course_location' => 'required',
            //'update_at' => 'required|date',
        ];


        return $rules;
    }
}
