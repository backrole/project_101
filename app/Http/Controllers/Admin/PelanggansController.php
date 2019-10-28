<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pelanggan\DestroyPelanggan;
use App\Http\Requests\Admin\Pelanggan\IndexPelanggan;
use App\Http\Requests\Admin\Pelanggan\StorePelanggan;
use App\Http\Requests\Admin\Pelanggan\UpdatePelanggan;
use App\Models\Pelanggan;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PelanggansController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPelanggan $request
     * @return Response|array
     */
    public function index(IndexPelanggan $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Pelanggan::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nama_pelanggan', 'alamat', 'telp'],

            // set columns to searchIn
            ['id', 'nama_pelanggan', 'alamat']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.pelanggan.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.pelanggan.create');

        return view('admin.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePelanggan $request
     * @return Response|array
     */
    public function store(StorePelanggan $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Pelanggan
        $pelanggan = Pelanggan::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/pelanggans'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/pelanggans');
    }

    /**
     * Display the specified resource.
     *
     * @param Pelanggan $pelanggan
     * @throws AuthorizationException
     * @return void
     */
    public function show(Pelanggan $pelanggan)
    {
        $this->authorize('admin.pelanggan.show', $pelanggan);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Pelanggan $pelanggan
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        $this->authorize('admin.pelanggan.edit', $pelanggan);


        return view('admin.pelanggan.edit', [
            'pelanggan' => $pelanggan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePelanggan $request
     * @param Pelanggan $pelanggan
     * @return Response|array
     */
    public function update(UpdatePelanggan $request, Pelanggan $pelanggan)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Pelanggan
        $pelanggan->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/pelanggans'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/pelanggans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPelanggan $request
     * @param Pelanggan $pelanggan
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyPelanggan $request, Pelanggan $pelanggan)
    {
        $pelanggan->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyPelanggan $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyPelanggan $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Pelanggan::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
