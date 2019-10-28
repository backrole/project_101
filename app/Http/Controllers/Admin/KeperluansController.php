<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Keperluan\DestroyKeperluan;
use App\Http\Requests\Admin\Keperluan\IndexKeperluan;
use App\Http\Requests\Admin\Keperluan\StoreKeperluan;
use App\Http\Requests\Admin\Keperluan\UpdateKeperluan;
use App\Models\Keperluan;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class KeperluansController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexKeperluan $request
     * @return Response|array
     */
    public function index(IndexKeperluan $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Keperluan::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'jenis_keperluan', 'biaya_keluar'],

            // set columns to searchIn
            ['id', 'jenis_keperluan']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.keperluan.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.keperluan.create');

        return view('admin.keperluan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreKeperluan $request
     * @return Response|array
     */
    public function store(StoreKeperluan $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Keperluan
        $keperluan = Keperluan::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/keperluans'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/keperluans');
    }

    /**
     * Display the specified resource.
     *
     * @param Keperluan $keperluan
     * @throws AuthorizationException
     * @return void
     */
    public function show(Keperluan $keperluan)
    {
        $this->authorize('admin.keperluan.show', $keperluan);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Keperluan $keperluan
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Keperluan $keperluan)
    {
        $this->authorize('admin.keperluan.edit', $keperluan);


        return view('admin.keperluan.edit', [
            'keperluan' => $keperluan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateKeperluan $request
     * @param Keperluan $keperluan
     * @return Response|array
     */
    public function update(UpdateKeperluan $request, Keperluan $keperluan)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Keperluan
        $keperluan->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/keperluans'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/keperluans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyKeperluan $request
     * @param Keperluan $keperluan
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyKeperluan $request, Keperluan $keperluan)
    {
        $keperluan->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyKeperluan $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyKeperluan $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Keperluan::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
