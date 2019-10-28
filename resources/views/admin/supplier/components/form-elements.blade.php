<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nama_supplier'), 'has-success': this.fields.nama_supplier && this.fields.nama_supplier.valid }">
    <label for="nama_supplier" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.supplier.columns.nama_supplier') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nama_supplier" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nama_supplier'), 'form-control-success': this.fields.nama_supplier && this.fields.nama_supplier.valid}" id="nama_supplier" name="nama_supplier" placeholder="{{ trans('admin.supplier.columns.nama_supplier') }}">
        <div v-if="errors.has('nama_supplier')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nama_supplier') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('alamat'), 'has-success': this.fields.alamat && this.fields.alamat.valid }">
    <label for="alamat" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.supplier.columns.alamat') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.alamat" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('alamat'), 'form-control-success': this.fields.alamat && this.fields.alamat.valid}" id="alamat" name="alamat" placeholder="{{ trans('admin.supplier.columns.alamat') }}">
        <div v-if="errors.has('alamat')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('alamat') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telp'), 'has-success': this.fields.telp && this.fields.telp.valid }">
    <label for="telp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.supplier.columns.telp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telp" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telp'), 'form-control-success': this.fields.telp && this.fields.telp.valid}" id="telp" name="telp" placeholder="{{ trans('admin.supplier.columns.telp') }}">
        <div v-if="errors.has('telp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telp') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nama_sales'), 'has-success': this.fields.nama_sales && this.fields.nama_sales.valid }">
    <label for="nama_sales" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.supplier.columns.nama_sales') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nama_sales" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nama_sales'), 'form-control-success': this.fields.nama_sales && this.fields.nama_sales.valid}" id="nama_sales" name="nama_sales" placeholder="{{ trans('admin.supplier.columns.nama_sales') }}">
        <div v-if="errors.has('nama_sales')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nama_sales') }}</div>
    </div>
</div>


