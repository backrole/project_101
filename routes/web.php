<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/admin-users',                            'Admin\AdminUsersController@index');
    Route::get('/admin/admin-users/create',                     'Admin\AdminUsersController@create');
    Route::post('/admin/admin-users',                           'Admin\AdminUsersController@store');
    Route::get('/admin/admin-users/{adminUser}/edit',           'Admin\AdminUsersController@edit')->name('admin/admin-users/edit');
    Route::post('/admin/admin-users/{adminUser}',               'Admin\AdminUsersController@update')->name('admin/admin-users/update');
    Route::delete('/admin/admin-users/{adminUser}',             'Admin\AdminUsersController@destroy')->name('admin/admin-users/destroy');
    Route::get('/admin/admin-users/{adminUser}/resend-activation','Admin\AdminUsersController@resendActivationEmail')->name('admin/admin-users/resendActivationEmail');
});

/* Auto-generated profile routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/profile',                                'Admin\ProfileController@editProfile');
    Route::post('/admin/profile',                               'Admin\ProfileController@updateProfile');
    Route::get('/admin/password',                               'Admin\ProfileController@editPassword');
    Route::post('/admin/password',                              'Admin\ProfileController@updatePassword');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/suppliers',                              'Admin\SupplierController@index');
    Route::get('/admin/suppliers/create',                       'Admin\SupplierController@create');
    Route::post('/admin/suppliers',                             'Admin\SupplierController@store');
    Route::get('/admin/suppliers/{supplier}/edit',              'Admin\SupplierController@edit')->name('admin/suppliers/edit');
    Route::post('/admin/suppliers/bulk-destroy',                'Admin\SupplierController@bulkDestroy')->name('admin/suppliers/bulk-destroy');
    Route::post('/admin/suppliers/{supplier}',                  'Admin\SupplierController@update')->name('admin/suppliers/update');
    Route::delete('/admin/suppliers/{supplier}',                'Admin\SupplierController@destroy')->name('admin/suppliers/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/suppliers',                              'Admin\SuppliersController@index');
    Route::get('/admin/suppliers/create',                       'Admin\SuppliersController@create');
    Route::post('/admin/suppliers',                             'Admin\SuppliersController@store');
    Route::get('/admin/suppliers/{supplier}/edit',              'Admin\SuppliersController@edit')->name('admin/suppliers/edit');
    Route::post('/admin/suppliers/bulk-destroy',                'Admin\SuppliersController@bulkDestroy')->name('admin/suppliers/bulk-destroy');
    Route::post('/admin/suppliers/{supplier}',                  'Admin\SuppliersController@update')->name('admin/suppliers/update');
    Route::delete('/admin/suppliers/{supplier}',                'Admin\SuppliersController@destroy')->name('admin/suppliers/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/barangs',                                'Admin\BarangsController@index');
    Route::get('/admin/barangs/create',                         'Admin\BarangsController@create');
    Route::post('/admin/barangs',                               'Admin\BarangsController@store');
    Route::get('/admin/barangs/{barang}/edit',                  'Admin\BarangsController@edit')->name('admin/barangs/edit');
    Route::post('/admin/barangs/bulk-destroy',                  'Admin\BarangsController@bulkDestroy')->name('admin/barangs/bulk-destroy');
    Route::post('/admin/barangs/{barang}',                      'Admin\BarangsController@update')->name('admin/barangs/update');
    Route::delete('/admin/barangs/{barang}',                    'Admin\BarangsController@destroy')->name('admin/barangs/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/promos',                                 'Admin\PromosController@index');
    Route::get('/admin/promos/create',                          'Admin\PromosController@create');
    Route::post('/admin/promos',                                'Admin\PromosController@store');
    Route::get('/admin/promos/{promo}/edit',                    'Admin\PromosController@edit')->name('admin/promos/edit');
    Route::post('/admin/promos/bulk-destroy',                   'Admin\PromosController@bulkDestroy')->name('admin/promos/bulk-destroy');
    Route::post('/admin/promos/{promo}',                        'Admin\PromosController@update')->name('admin/promos/update');
    Route::delete('/admin/promos/{promo}',                      'Admin\PromosController@destroy')->name('admin/promos/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/penjualans',                             'Admin\PenjualansController@index');
    Route::get('/admin/penjualans/create',                      'Admin\PenjualansController@create');
    Route::post('/admin/penjualans',                            'Admin\PenjualansController@store');
    Route::get('/admin/penjualans/{penjualan}/edit',            'Admin\PenjualansController@edit')->name('admin/penjualans/edit');
    Route::post('/admin/penjualans/bulk-destroy',               'Admin\PenjualansController@bulkDestroy')->name('admin/penjualans/bulk-destroy');
    Route::post('/admin/penjualans/{penjualan}',                'Admin\PenjualansController@update')->name('admin/penjualans/update');
    Route::delete('/admin/penjualans/{penjualan}',              'Admin\PenjualansController@destroy')->name('admin/penjualans/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/pelanggans',                             'Admin\PelanggansController@index');
    Route::get('/admin/pelanggans/create',                      'Admin\PelanggansController@create');
    Route::post('/admin/pelanggans',                            'Admin\PelanggansController@store');
    Route::get('/admin/pelanggans/{pelanggan}/edit',            'Admin\PelanggansController@edit')->name('admin/pelanggans/edit');
    Route::post('/admin/pelanggans/bulk-destroy',               'Admin\PelanggansController@bulkDestroy')->name('admin/pelanggans/bulk-destroy');
    Route::post('/admin/pelanggans/{pelanggan}',                'Admin\PelanggansController@update')->name('admin/pelanggans/update');
    Route::delete('/admin/pelanggans/{pelanggan}',              'Admin\PelanggansController@destroy')->name('admin/pelanggans/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/keperluans',                             'Admin\KeperluansController@index');
    Route::get('/admin/keperluans/create',                      'Admin\KeperluansController@create');
    Route::post('/admin/keperluans',                            'Admin\KeperluansController@store');
    Route::get('/admin/keperluans/{keperluan}/edit',            'Admin\KeperluansController@edit')->name('admin/keperluans/edit');
    Route::post('/admin/keperluans/bulk-destroy',               'Admin\KeperluansController@bulkDestroy')->name('admin/keperluans/bulk-destroy');
    Route::post('/admin/keperluans/{keperluan}',                'Admin\KeperluansController@update')->name('admin/keperluans/update');
    Route::delete('/admin/keperluans/{keperluan}',              'Admin\KeperluansController@destroy')->name('admin/keperluans/destroy');
});