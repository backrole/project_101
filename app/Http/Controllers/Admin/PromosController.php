<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Promo\DestroyPromo;
use App\Http\Requests\Admin\Promo\IndexPromo;
use App\Http\Requests\Admin\Promo\StorePromo;
use App\Http\Requests\Admin\Promo\UpdatePromo;
use App\Models\Promo;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PromosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPromo $request
     * @return Response|array
     */
    public function index(IndexPromo $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Promo::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'bonus_barang', 'diskon', 'keterangan', 'mulai_promo', 'selesai_promo', 'id_barang'],

            // set columns to searchIn
            ['id', 'bonus_barang', 'keterangan']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.promo.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.promo.create');

        return view('admin.promo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePromo $request
     * @return Response|array
     */
    public function store(StorePromo $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Promo
        $promo = Promo::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/promos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/promos');
    }

    /**
     * Display the specified resource.
     *
     * @param Promo $promo
     * @throws AuthorizationException
     * @return void
     */
    public function show(Promo $promo)
    {
        $this->authorize('admin.promo.show', $promo);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Promo $promo
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Promo $promo)
    {
        $this->authorize('admin.promo.edit', $promo);


        return view('admin.promo.edit', [
            'promo' => $promo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePromo $request
     * @param Promo $promo
     * @return Response|array
     */
    public function update(UpdatePromo $request, Promo $promo)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Promo
        $promo->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/promos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/promos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPromo $request
     * @param Promo $promo
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyPromo $request, Promo $promo)
    {
        $promo->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyPromo $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyPromo $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Promo::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
