<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Supplier\DestroySupplier;
use App\Http\Requests\Admin\Supplier\IndexSupplier;
use App\Http\Requests\Admin\Supplier\StoreSupplier;
use App\Http\Requests\Admin\Supplier\UpdateSupplier;
use App\Models\Supplier;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SuppliersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSupplier $request
     * @return Response|array
     */
    public function index(IndexSupplier $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Supplier::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nama_supplier', 'alamat', 'telp', 'nama_sales'],

            // set columns to searchIn
            ['id', 'nama_supplier', 'alamat', 'nama_sales']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.supplier.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.supplier.create');

        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSupplier $request
     * @return Response|array
     */
    public function store(StoreSupplier $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Supplier
        $supplier = Supplier::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/suppliers'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param Supplier $supplier
     * @throws AuthorizationException
     * @return void
     */
    public function show(Supplier $supplier)
    {
        $this->authorize('admin.supplier.show', $supplier);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Supplier $supplier
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Supplier $supplier)
    {
        $this->authorize('admin.supplier.edit', $supplier);


        return view('admin.supplier.edit', [
            'supplier' => $supplier,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSupplier $request
     * @param Supplier $supplier
     * @return Response|array
     */
    public function update(UpdateSupplier $request, Supplier $supplier)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Supplier
        $supplier->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/suppliers'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySupplier $request
     * @param Supplier $supplier
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroySupplier $request, Supplier $supplier)
    {
        $supplier->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroySupplier $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroySupplier $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Supplier::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
