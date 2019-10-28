<?php

namespace App\Http\Requests\Admin\Barang;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreBarang extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.barang.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id_barang' => ['required', 'string'],
            'nama_barang' => ['required', 'string'],
            'stock_grosir' => ['required', 'integer'],
            'stock_retail' => ['required', 'integer'],
            'harga_grosir' => ['required', 'integer'],
            'harga_retail' => ['required', 'integer'],
            'isi_per_box' => ['required', 'integer'],
            'status_pembayaran' => ['required', 'string'],
            'id_supplier' => ['required', 'string'],
            
        ];
    }
}
