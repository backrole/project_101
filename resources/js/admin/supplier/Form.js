import AppForm from '../app-components/Form/AppForm';

Vue.component('supplier-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nama_supplier:  '' ,
                alamat:  '' ,
                telp:  '' ,
                nama_sales:  '' ,
                
            }
        }
    }

});