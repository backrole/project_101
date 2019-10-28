<?php

namespace App\Http\Requests\Admin\Penjualan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePenjualan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.penjualan.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'jumlah_pembelian' => ['required', 'integer'],
            'satuan' => ['required', 'integer'],
            'total' => ['required', 'integer'],
            'potongan_manual' => ['required', 'integer'],
            'id_barang' => ['required', 'string'],
            'id_promo' => ['required', 'string'],
            
        ];
    }
}
