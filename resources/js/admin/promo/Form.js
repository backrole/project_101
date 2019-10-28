import AppForm from '../app-components/Form/AppForm';

Vue.component('promo-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                bonus_barang:  '' ,
                diskon:  '' ,
                keterangan:  '' ,
                mulai_promo:  '' ,
                selesai_promo:  '' ,
                id_barang:  '' ,
                
            }
        }
    }

});