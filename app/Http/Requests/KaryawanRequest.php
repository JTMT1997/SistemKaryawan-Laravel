<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanRequest extends FormRequest
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
            'status_id'=>'required|integer',
            'pendidikan_id'=>'required|integer',
            'posisi_id'=>'required|integer',
            'nama'=>'required|max:255',
            'umur'=>'required|integer',
            'jenis_kelamin' => 'required|string|in:LAKI_LAKI,PEREMPUAN',
            'email'=>'required|max:255',
            'no_telp'=>'required',
            'ttl'=>'required|date',
            'tgl_masuk'=>'required|date'
        ];
    }
}
