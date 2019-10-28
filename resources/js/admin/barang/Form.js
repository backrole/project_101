import AppForm from '../app-components/Form/AppForm';

Vue.component('barang-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                id_barang:  '' ,
                nama_barang:  '' ,
                stock_grosir:  '' ,
                stock_retail:  '' ,
                harga_grosir:  '' ,
                harga_retail:  '' ,
                isi_per_box:  '' ,
                status_pembayaran:  '' ,
                id_supplier:  '' ,
                
            }
        }
    }

});