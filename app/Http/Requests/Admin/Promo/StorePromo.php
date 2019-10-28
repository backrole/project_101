<?php

namespace App\Http\Requests\Admin\Promo;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePromo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.promo.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'bonus_barang' => ['required', 'string'],
            'diskon' => ['required', 'integer'],
            'keterangan' => ['required', 'string'],
            'mulai_promo' => ['required', 'date'],
            'selesai_promo' => ['required', 'date'],
            'id_barang' => ['required', 'string'],
            
        ];
    }
}
