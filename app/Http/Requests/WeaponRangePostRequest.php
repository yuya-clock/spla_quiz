<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeaponRangePostRequest extends FormRequest
{
    /**
     * バリデータが最初のルールの失敗で停​​止するかを指示
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

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
            'chosen_choice' => 'bail | required',
            'first_weapon_id' => 'bail | required | integer',
            'second_weapon_id' => 'bail | required | integer',
        ];
    }
}
