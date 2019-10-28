import AppForm from '../app-components/Form/AppForm';

Vue.component('keperluan-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                jenis_keperluan:  '' ,
                biaya_keluar:  '' ,
                
            }
        }
    }

});