<?php

namespace App\Http\Requests\Admin\Keperluan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreKeperluan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.keperluan.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'jenis_keperluan' => ['required', 'string'],
            'biaya_keluar' => ['required', 'string'],
            
        ];
    }
}
