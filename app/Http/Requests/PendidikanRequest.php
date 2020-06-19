<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendidikanRequest extends FormRequest
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

            'karyawan_id'=>'integer',
            'pendidikan_terakhir'=>'required|max:255'
            // 'pendidikan_terakir '=>'required|string|in:SMA,S1,S2,S3'

        ];
    }
}
