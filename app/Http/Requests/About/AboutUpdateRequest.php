<?php

namespace CCZ\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
      'title' => 'required|min:3',
    ];
  }


  public function messages()
  {
    return [
      'title.required' => 'The Title field is required.',
      'title.min'      => 'The Title must be at least :min.'
    ];
  }

}
