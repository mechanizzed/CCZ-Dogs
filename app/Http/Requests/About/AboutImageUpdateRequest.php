<?php

namespace CCZ\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutImageUpdateRequest extends FormRequest
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
      'file' => 'required|image'
    ];
  }

  public function messages()
  {
    return [
      'file.required' => 'The Image field is required.',
      'file.image'    => 'The :attribute must be an image.'
    ];
  }

}
