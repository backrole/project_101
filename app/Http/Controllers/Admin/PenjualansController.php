<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Penjualan\DestroyPenjualan;
use App\Http\Requests\Admin\Penjualan\IndexPenjualan;
use App\Http\Requests\Admin\Penjualan\StorePenjualan;
use App\Http\Requests\Admin\Penjualan\UpdatePenjualan;
use App\Models\Penjualan;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PenjualansController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPenjualan $request
     * @return Response|array
     */
    public function index(IndexPenjualan $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Penjualan::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'jumlah_pembelian', 'satuan', 'total', 'potongan_manual', 'id_barang', 'id_promo'],

            // set columns to searchIn
            ['id']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.penjualan.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.penjualan.create');

        return view('admin.penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePenjualan $request
     * @return Response|array
     */
    public function store(StorePenjualan $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Penjualan
        $penjualan = Penjualan::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/penjualans'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/penjualans');
    }

    /**
     * Display the specified resource.
     *
     * @param Penjualan $penjualan
     * @throws AuthorizationException
     * @return void
     */
    public function show(Penjualan $penjualan)
    {
        $this->authorize('admin.penjualan.show', $penjualan);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Penjualan $penjualan
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Penjualan $penjualan)
    {
        $this->authorize('admin.penjualan.edit', $penjualan);


        return view('admin.penjualan.edit', [
            'penjualan' => $penjualan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePenjualan $request
     * @param Penjualan $penjualan
     * @return Response|array
     */
    public function update(UpdatePenjualan $request, Penjualan $penjualan)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Penjualan
        $penjualan->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/penjualans'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/penjualans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPenjualan $request
     * @param Penjualan $penjualan
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyPenjualan $request, Penjualan $penjualan)
    {
        $penjualan->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyPenjualan $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyPenjualan $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Penjualan::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
