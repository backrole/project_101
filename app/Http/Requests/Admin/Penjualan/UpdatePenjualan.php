<?php

namespace App\Http\Requests\Admin\Penjualan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePenjualan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.penjualan.edit', $this->penjualan);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'jumlah_pembelian' => ['sometimes', 'integer'],
            'satuan' => ['sometimes', 'integer'],
            'total' => ['sometimes', 'integer'],
            'potongan_manual' => ['sometimes', 'integer'],
            'id_barang' => ['sometimes', 'integer'],
            'id_promo' => ['sometimes', 'integer'],

        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
