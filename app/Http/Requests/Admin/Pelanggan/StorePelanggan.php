<?php

namespace App\Http\Requests\Admin\Pelanggan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePelanggan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.pelanggan.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nama_pelanggan' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'telp' => ['required', 'string'],
            
        ];
    }
}
