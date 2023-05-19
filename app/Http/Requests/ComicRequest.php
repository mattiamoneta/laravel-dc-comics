<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title'=>'required|max:80',
            'description'=>'required|max:65535',
            'thumb'=>'required|url',
            'price'=>'required|max:4',
            'series'=>'required|max:80',
            'sale_date'=>'required|max:12',
            'type'=>'required|max:255'
        ];
    }


    /**
     * Messages
     */

     public function messages(){
        return [
            'title.required'=>'Il campo Title non può essere vuoto',
            'description.required'=>'Il campo Description non può essere vuoto',
            'thumb.required'=>'Il campo Thumbnail non può essere vuoto',
            'thumb.url'=>'Il campo non contiene un URL valido',
            'price.required'=>'Il campo Price non può essere vuoto',
            'series.required'=>'Il campo Serie non può essere vuoto',
            'sale_date.required'=>'Il campo Sale Date non può essere vuoto',
            'type.required'=>'Il campo Type non può essere vuoto',

            'title.max'=>'Il campo Title non può essere superiore a 80 caratteri',
            'description.max'=>'Il campo Description non può essere  superiore a 65535 caratteri',
            'price.max'=>'Il campo Price non può essere superiore a 4 caratteri',
            'series.max'=>'Il campo Serie non può essere superiore a 80 caratteri',
            'sale_date.max'=>'Il campo Sale Date non può essere superiore a 12 caratteri',
            'type.max'=>'Il campo Type non può essere superiore a 80 caratteri'
        ];
     }
}
