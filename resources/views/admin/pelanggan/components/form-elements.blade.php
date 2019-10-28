<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nama_pelanggan'), 'has-success': this.fields.nama_pelanggan && this.fields.nama_pelanggan.valid }">
    <label for="nama_pelanggan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pelanggan.columns.nama_pelanggan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nama_pelanggan" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nama_pelanggan'), 'form-control-success': this.fields.nama_pelanggan && this.fields.nama_pelanggan.valid}" id="nama_pelanggan" name="nama_pelanggan" placeholder="{{ trans('admin.pelanggan.columns.nama_pelanggan') }}">
        <div v-if="errors.has('nama_pelanggan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nama_pelanggan') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('alamat'), 'has-success': this.fields.alamat && this.fields.alamat.valid }">
    <label for="alamat" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pelanggan.columns.alamat') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.alamat" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('alamat'), 'form-control-success': this.fields.alamat && this.fields.alamat.valid}" id="alamat" name="alamat" placeholder="{{ trans('admin.pelanggan.columns.alamat') }}">
        <div v-if="errors.has('alamat')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('alamat') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telp'), 'has-success': this.fields.telp && this.fields.telp.valid }">
    <label for="telp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pelanggan.columns.telp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telp" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telp'), 'form-control-success': this.fields.telp && this.fields.telp.valid}" id="telp" name="telp" placeholder="{{ trans('admin.pelanggan.columns.telp') }}">
        <div v-if="errors.has('telp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telp') }}</div>
    </div>
</div>


