<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AbsenApiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        if($request->isMethod('post')){
            return [
                'users_id' => 'required|integer|max:255',
                'foto_path' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
                'status' => 'required|string|max:255',
            ];
        }else{
            return [
                'users_id' => 'required|integer|max:255',
                'foto_path' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
                'status' => 'required|string|max:255',
            ];
        }
    }

    public function messages()
    {
        if(request->isMethod('post'))
        {
            return [
                'users_id.required' => 'ID user harus diisi.',
                'keterangan.required' => 'Keterangan harus diisi.',
                'foto_path.required' => 'Foto harus diisi.',
                'status.required' => 'Status harus diisi.',
            ];
        }else{
            return [
                'users_id.required' => 'ID user harus diisi.',
                'keterangan.required' => 'Keterangan harus diisi.',
                'foto_path.required' => 'Foto harus diisi.',
                'status.required' => 'Status harus diisi.',
            ];
        }
    }
}
