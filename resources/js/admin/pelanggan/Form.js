import AppForm from '../app-components/Form/AppForm';

Vue.component('pelanggan-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nama_pelanggan:  '' ,
                alamat:  '' ,
                telp:  '' ,
                
            }
        }
    }

});