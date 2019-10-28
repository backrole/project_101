<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_barang'), 'has-success': this.fields.id_barang && this.fields.id_barang.valid }">
    <label for="id_barang" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.barang.columns.id_barang') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_barang" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_barang'), 'form-control-success': this.fields.id_barang && this.fields.id_barang.valid}" id="id_barang" name="id_barang" placeholder="{{ trans('admin.barang.columns.id_barang') }}">
        <div v-if="errors.has('id_barang')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_barang') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nama_barang'), 'has-success': this.fields.nama_barang && this.fields.nama_barang.valid }">
    <label for="nama_barang" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.barang.columns.nama_barang') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nama_barang" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nama_barang'), 'form-control-success': this.fields.nama_barang && this.fields.nama_barang.valid}" id="nama_barang" name="nama_barang" placeholder="{{ trans('admin.barang.columns.nama_barang') }}">
        <div v-if="errors.has('nama_barang')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nama_barang') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('stock_grosir'), 'has-success': this.fields.stock_grosir && this.fields.stock_grosir.valid }">
    <label for="stock_grosir" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.barang.columns.stock_grosir') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.stock_grosir" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('stock_grosir'), 'form-control-success': this.fields.stock_grosir && this.fields.stock_grosir.valid}" id="stock_grosir" name="stock_grosir" placeholder="{{ trans('admin.barang.columns.stock_grosir') }}">
        <div v-if="errors.has('stock_grosir')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('stock_grosir') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('stock_retail'), 'has-success': this.fields.stock_retail && this.fields.stock_retail.valid }">
    <label for="stock_retail" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.barang.columns.stock_retail') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.stock_retail" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('stock_retail'), 'form-control-success': this.fields.stock_retail && this.fields.stock_retail.valid}" id="stock_retail" name="stock_retail" placeholder="{{ trans('admin.barang.columns.stock_retail') }}">
        <div v-if="errors.has('stock_retail')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('stock_retail') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('harga_grosir'), 'has-success': this.fields.harga_grosir && this.fields.harga_grosir.valid }">
    <label for="harga_grosir" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.barang.columns.harga_grosir') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.harga_grosir" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('harga_grosir'), 'form-control-success': this.fields.harga_grosir && this.fields.harga_grosir.valid}" id="harga_grosir" name="harga_grosir" placeholder="{{ trans('admin.barang.columns.harga_grosir') }}">
        <div v-if="errors.has('harga_grosir')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('harga_grosir') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('harga_retail'), 'has-success': this.fields.harga_retail && this.fields.harga_retail.valid }">
    <label for="harga_retail" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.barang.columns.harga_retail') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.harga_retail" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('harga_retail'), 'form-control-success': this.fields.harga_retail && this.fields.harga_retail.valid}" id="harga_retail" name="harga_retail" placeholder="{{ trans('admin.barang.columns.harga_retail') }}">
        <div v-if="errors.has('harga_retail')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('harga_retail') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('isi_per_box'), 'has-success': this.fields.isi_per_box && this.fields.isi_per_box.valid }">
    <label for="isi_per_box" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.barang.columns.isi_per_box') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.isi_per_box" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('isi_per_box'), 'form-control-success': this.fields.isi_per_box && this.fields.isi_per_box.valid}" id="isi_per_box" name="isi_per_box" placeholder="{{ trans('admin.barang.columns.isi_per_box') }}">
        <div v-if="errors.has('isi_per_box')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('isi_per_box') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status_pembayaran'), 'has-success': this.fields.status_pembayaran && this.fields.status_pembayaran.valid }">
    <label for="status_pembayaran" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.barang.columns.status_pembayaran') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status_pembayaran" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status_pembayaran'), 'form-control-success': this.fields.status_pembayaran && this.fields.status_pembayaran.valid}" id="status_pembayaran" name="status_pembayaran" placeholder="{{ trans('admin.barang.columns.status_pembayaran') }}">
        <div v-if="errors.has('status_pembayaran')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status_pembayaran') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_supplier'), 'has-success': this.fields.id_supplier && this.fields.id_supplier.valid }">
    <label for="id_supplier" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.barang.columns.id_supplier') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_supplier" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_supplier'), 'form-control-success': this.fields.id_supplier && this.fields.id_supplier.valid}" id="id_supplier" name="id_supplier" placeholder="{{ trans('admin.barang.columns.id_supplier') }}">
        <div v-if="errors.has('id_supplier')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_supplier') }}</div>
    </div>
</div>


