<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'supplier' => [
        'title' => 'Supplier',

        'actions' => [
            'index' => 'Supplier',
            'create' => 'New Supplier',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'supplier' => [
        'title' => 'Suppliers',

        'actions' => [
            'index' => 'Suppliers',
            'create' => 'New Supplier',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_supplier' => 'Id supplier',
            'nama_supplier' => 'Nama supplier',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'nama_sales' => 'Nama sales',
            
        ],
    ],

    'barang' => [
        'title' => 'Barangs',

        'actions' => [
            'index' => 'Barangs',
            'create' => 'New Barang',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_barangs' => 'Id barangs',
            'nama_barang' => 'Nama barang',
            'stock_grosir' => 'Stock grosir',
            'stock_retail' => 'Stock retail',
            'harga_grosir' => 'Harga grosir',
            'harga_retail' => 'Harga retail',
            'isi_per_box' => 'Isi per box',
            'status_pembayaran' => 'Status pembayaran',
            'id_supplier' => 'Id supplier',
            
        ],
    ],

    'promo' => [
        'title' => 'Promos',

        'actions' => [
            'index' => 'Promos',
            'create' => 'New Promo',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_promo' => 'Id promo',
            'bonus_barang' => 'Bonus barang',
            'diskon' => 'Diskon',
            'keterangan' => 'Keterangan',
            'mulai_promo' => 'Mulai promo',
            'selesai_promo' => 'Selesai promo',
            'id_barang' => 'Id barang',
            
        ],
    ],

    'penjualan' => [
        'title' => 'Penjualans',

        'actions' => [
            'index' => 'Penjualans',
            'create' => 'New Penjualan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_penjualan' => 'Id penjualan',
            'jumlah_pembelian' => 'Jumlah pembelian',
            'satuan' => 'Satuan',
            'total' => 'Total',
            'potongan_manual' => 'Potongan manual',
            'id_barang' => 'Id barang',
            'id_promo' => 'Id promo',
            
        ],
    ],

    'promo' => [
        'title' => 'Promos',

        'actions' => [
            'index' => 'Promos',
            'create' => 'New Promo',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_promo' => 'Id promo',
            'bonus_barang' => 'Bonus barang',
            'diskon' => 'Diskon',
            'keterangan' => 'Keterangan',
            'mulai_promo' => 'Mulai promo',
            'selesai_promo' => 'Selesai promo',
            'id_barang' => 'Id barang',
            
        ],
    ],

    'pelanggan' => [
        'title' => 'Pelanggans',

        'actions' => [
            'index' => 'Pelanggans',
            'create' => 'New Pelanggan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_pelanggan' => 'Id pelanggan',
            'nama_pelanggan' => 'Nama pelanggan',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            
        ],
    ],

    'keperluan' => [
        'title' => 'Keperluans',

        'actions' => [
            'index' => 'Keperluans',
            'create' => 'New Keperluan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_keperluan' => 'Id keperluan',
            'jenis_keperluan' => 'Jenis keperluan',
            'biaya_keluar' => 'Biaya keluar',
            
        ],
    ],

    'barang' => [
        'title' => 'Barangs',

        'actions' => [
            'index' => 'Barangs',
            'create' => 'New Barang',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_barang' => 'Id barang',
            'nama_barang' => 'Nama barang',
            'stock_grosir' => 'Stock grosir',
            'stock_retail' => 'Stock retail',
            'harga_grosir' => 'Harga grosir',
            'harga_retail' => 'Harga retail',
            'isi_per_box' => 'Isi per box',
            'status_pembayaran' => 'Status pembayaran',
            'id_supplier' => 'Id supplier',
            
        ],
    ],

    'supplier' => [
        'title' => 'Suppliers',

        'actions' => [
            'index' => 'Suppliers',
            'create' => 'New Supplier',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_supplier' => 'Id supplier',
            'nama_supplier' => 'Nama supplier',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'nama_sales' => 'Nama sales',
            
        ],
    ],

    'supplier' => [
        'title' => 'Suppliers',

        'actions' => [
            'index' => 'Suppliers',
            'create' => 'New Supplier',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nama_supplier' => 'Nama supplier',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'nama_sales' => 'Nama sales',
            
        ],
    ],

    'barang' => [
        'title' => 'Barangs',

        'actions' => [
            'index' => 'Barangs',
            'create' => 'New Barang',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_barang' => 'Id barang',
            'nama_barang' => 'Nama barang',
            'stock_grosir' => 'Stock grosir',
            'stock_retail' => 'Stock retail',
            'harga_grosir' => 'Harga grosir',
            'harga_retail' => 'Harga retail',
            'isi_per_box' => 'Isi per box',
            'status_pembayaran' => 'Status pembayaran',
            'id_supplier' => 'Id supplier',
            
        ],
    ],

    'promo' => [
        'title' => 'Promos',

        'actions' => [
            'index' => 'Promos',
            'create' => 'New Promo',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'bonus_barang' => 'Bonus barang',
            'diskon' => 'Diskon',
            'keterangan' => 'Keterangan',
            'mulai_promo' => 'Mulai promo',
            'selesai_promo' => 'Selesai promo',
            'id_barang' => 'Id barang',
            
        ],
    ],

    'penjualan' => [
        'title' => 'Penjualans',

        'actions' => [
            'index' => 'Penjualans',
            'create' => 'New Penjualan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'jumlah_pembelian' => 'Jumlah pembelian',
            'satuan' => 'Satuan',
            'total' => 'Total',
            'potongan_manual' => 'Potongan manual',
            'id_barang' => 'Id barang',
            'id_promo' => 'Id promo',
            
        ],
    ],

    'keperluan' => [
        'title' => 'Keperluans',

        'actions' => [
            'index' => 'Keperluans',
            'create' => 'New Keperluan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'jenis_keperluan' => 'Jenis keperluan',
            'biaya_keluar' => 'Biaya keluar',
            
        ],
    ],

    'pelanggan' => [
        'title' => 'Pelanggans',

        'actions' => [
            'index' => 'Pelanggans',
            'create' => 'New Pelanggan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nama_pelanggan' => 'Nama pelanggan',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            
        ],
    ],

    'supplier' => [
        'title' => 'Suppliers',

        'actions' => [
            'index' => 'Suppliers',
            'create' => 'New Supplier',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nama_supplier' => 'Nama supplier',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'nama_sales' => 'Nama sales',
            
        ],
    ],

    'barang' => [
        'title' => 'Barangs',

        'actions' => [
            'index' => 'Barangs',
            'create' => 'New Barang',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_barang' => 'Id barang',
            'nama_barang' => 'Nama barang',
            'stock_grosir' => 'Stock grosir',
            'stock_retail' => 'Stock retail',
            'harga_grosir' => 'Harga grosir',
            'harga_retail' => 'Harga retail',
            'isi_per_box' => 'Isi per box',
            'status_pembayaran' => 'Status pembayaran',
            'id_supplier' => 'Id supplier',
            
        ],
    ],

    'promo' => [
        'title' => 'Promos',

        'actions' => [
            'index' => 'Promos',
            'create' => 'New Promo',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'bonus_barang' => 'Bonus barang',
            'diskon' => 'Diskon',
            'keterangan' => 'Keterangan',
            'mulai_promo' => 'Mulai promo',
            'selesai_promo' => 'Selesai promo',
            'id_barang' => 'Id barang',
            
        ],
    ],

    'penjualan' => [
        'title' => 'Penjualans',

        'actions' => [
            'index' => 'Penjualans',
            'create' => 'New Penjualan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'jumlah_pembelian' => 'Jumlah pembelian',
            'satuan' => 'Satuan',
            'total' => 'Total',
            'potongan_manual' => 'Potongan manual',
            'id_barang' => 'Id barang',
            'id_promo' => 'Id promo',
            
        ],
    ],

    'keperluan' => [
        'title' => 'Keperluans',

        'actions' => [
            'index' => 'Keperluans',
            'create' => 'New Keperluan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'jenis_keperluan' => 'Jenis keperluan',
            'biaya_keluar' => 'Biaya keluar',
            
        ],
    ],

    'pelanggan' => [
        'title' => 'Pelanggans',

        'actions' => [
            'index' => 'Pelanggans',
            'create' => 'New Pelanggan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nama_pelanggan' => 'Nama pelanggan',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];