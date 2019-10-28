<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Supplier::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Supplier::class, static function (Faker\Generator $faker) {
    return [
        'id_supplier' => $faker->sentence,
        'nama_supplier' => $faker->sentence,
        'alamat' => $faker->sentence,
        'telp' => $faker->sentence,
        'nama_sales' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Barang::class, static function (Faker\Generator $faker) {
    return [
        'id_barangs' => $faker->sentence,
        'nama_barang' => $faker->sentence,
        'stock_grosir' => $faker->randomNumber(5),
        'stock_retail' => $faker->randomNumber(5),
        'harga_grosir' => $faker->randomNumber(5),
        'harga_retail' => $faker->randomNumber(5),
        'isi_per_box' => $faker->randomNumber(5),
        'status_pembayaran' => $faker->sentence,
        'id_supplier' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Promo::class, static function (Faker\Generator $faker) {
    return [
        'id_promo' => $faker->sentence,
        'bonus_barang' => $faker->sentence,
        'diskon' => $faker->randomNumber(5),
        'keterangan' => $faker->sentence,
        'mulai_promo' => $faker->date(),
        'selesai_promo' => $faker->date(),
        'id_barang' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Penjualan::class, static function (Faker\Generator $faker) {
    return [
        'id_penjualan' => $faker->sentence,
        'jumlah_pembelian' => $faker->randomNumber(5),
        'satuan' => $faker->randomNumber(5),
        'total' => $faker->randomNumber(5),
        'potongan_manual' => $faker->randomNumber(5),
        'id_barang' => $faker->sentence,
        'id_promo' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Pelanggan::class, static function (Faker\Generator $faker) {
    return [
        'id_pelanggan' => $faker->sentence,
        'nama_pelanggan' => $faker->sentence,
        'alamat' => $faker->sentence,
        'telp' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Keperluan::class, static function (Faker\Generator $faker) {
    return [
        'id_keperluan' => $faker->sentence,
        'jenis_keperluan' => $faker->sentence,
        'biaya_keluar' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Barang::class, static function (Faker\Generator $faker) {
    return [
        'id_barang' => $faker->sentence,
        'nama_barang' => $faker->sentence,
        'stock_grosir' => $faker->randomNumber(5),
        'stock_retail' => $faker->randomNumber(5),
        'harga_grosir' => $faker->randomNumber(5),
        'harga_retail' => $faker->randomNumber(5),
        'isi_per_box' => $faker->randomNumber(5),
        'status_pembayaran' => $faker->sentence,
        'id_supplier' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Supplier::class, static function (Faker\Generator $faker) {
    return [
        'nama_supplier' => $faker->sentence,
        'alamat' => $faker->sentence,
        'telp' => $faker->sentence,
        'nama_sales' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Promo::class, static function (Faker\Generator $faker) {
    return [
        'bonus_barang' => $faker->sentence,
        'diskon' => $faker->randomNumber(5),
        'keterangan' => $faker->sentence,
        'mulai_promo' => $faker->date(),
        'selesai_promo' => $faker->date(),
        'id_barang' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Penjualan::class, static function (Faker\Generator $faker) {
    return [
        'jumlah_pembelian' => $faker->randomNumber(5),
        'satuan' => $faker->randomNumber(5),
        'total' => $faker->randomNumber(5),
        'potongan_manual' => $faker->randomNumber(5),
        'id_barang' => $faker->sentence,
        'id_promo' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Keperluan::class, static function (Faker\Generator $faker) {
    return [
        'jenis_keperluan' => $faker->sentence,
        'biaya_keluar' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Pelanggan::class, static function (Faker\Generator $faker) {
    return [
        'nama_pelanggan' => $faker->sentence,
        'alamat' => $faker->sentence,
        'telp' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
