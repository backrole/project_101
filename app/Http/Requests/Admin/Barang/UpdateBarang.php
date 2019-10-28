<?php

namespace App\Http\Requests\Admin\Barang;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateBarang extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.barang.edit', $this->barang);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id_barang' => ['sometimes', 'string'],
            'nama_barang' => ['sometimes', 'string'],
            'stock_grosir' => ['sometimes', 'integer'],
            'stock_retail' => ['sometimes', 'integer'],
            'harga_grosir' => ['sometimes', 'integer'],
            'harga_retail' => ['sometimes', 'integer'],
            'isi_per_box' => ['sometimes', 'integer'],
            'status_pembayaran' => ['sometimes', 'string'],
            'id_supplier' => ['sometimes', 'integer'],

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
