import AppForm from '../app-components/Form/AppForm';

Vue.component('penjualan-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                jumlah_pembelian:  '' ,
                satuan:  '' ,
                total:  '' ,
                potongan_manual:  '' ,
                id_barang:  '' ,
                id_promo:  '' ,
                
            }
        }
    }

});