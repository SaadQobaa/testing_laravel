<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class QtppRequest extends Request
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
            'name'=>'required|min:5|max:250|alpha',
            'dosage_form'=>'max:250',
            'route_of_admin'=>'max:250',
            'dosage_strength'=>'max:250',
            'pharmacokinetics'=>'max:250',
            'stability'=>'max:250',
            'assay'=>'max:250',
            'water_content'=>'max:250',
            'content_uniformity'=>'max:250',
            'dissolution'=>'max:250',
            'disintegration'=>'max:250',
            'purity'=>'max:250',
            'container_closure_system'=>'max:250',
            'friability'=>'max:250'
        ];
    }
}
