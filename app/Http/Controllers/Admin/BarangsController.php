<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Barang\DestroyBarang;
use App\Http\Requests\Admin\Barang\IndexBarang;
use App\Http\Requests\Admin\Barang\StoreBarang;
use App\Http\Requests\Admin\Barang\UpdateBarang;
use App\Models\Barang;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class BarangsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBarang $request
     * @return Response|array
     */
    public function index(IndexBarang $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Barang::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'id_barang', 'nama_barang', 'stock_grosir', 'stock_retail', 'harga_grosir', 'harga_retail', 'isi_per_box', 'status_pembayaran', 'id_supplier'],

            // set columns to searchIn
            ['id', 'nama_barang', 'status_pembayaran']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.barang.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.barang.create');

        return view('admin.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBarang $request
     * @return Response|array
     */
    public function store(StoreBarang $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Barang
        $barang = Barang::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/barangs'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/barangs');
    }

    /**
     * Display the specified resource.
     *
     * @param Barang $barang
     * @throws AuthorizationException
     * @return void
     */
    public function show(Barang $barang)
    {
        $this->authorize('admin.barang.show', $barang);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Barang $barang
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Barang $barang)
    {
        $this->authorize('admin.barang.edit', $barang);


        return view('admin.barang.edit', [
            'barang' => $barang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBarang $request
     * @param Barang $barang
     * @return Response|array
     */
    public function update(UpdateBarang $request, Barang $barang)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Barang
        $barang->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/barangs'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/barangs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBarang $request
     * @param Barang $barang
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyBarang $request, Barang $barang)
    {
        $barang->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyBarang $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyBarang $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Barang::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
