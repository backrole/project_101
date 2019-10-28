<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jumlah_pembelian'), 'has-success': this.fields.jumlah_pembelian && this.fields.jumlah_pembelian.valid }">
    <label for="jumlah_pembelian" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.penjualan.columns.jumlah_pembelian') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jumlah_pembelian" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jumlah_pembelian'), 'form-control-success': this.fields.jumlah_pembelian && this.fields.jumlah_pembelian.valid}" id="jumlah_pembelian" name="jumlah_pembelian" placeholder="{{ trans('admin.penjualan.columns.jumlah_pembelian') }}">
        <div v-if="errors.has('jumlah_pembelian')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jumlah_pembelian') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('satuan'), 'has-success': this.fields.satuan && this.fields.satuan.valid }">
    <label for="satuan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.penjualan.columns.satuan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.satuan" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('satuan'), 'form-control-success': this.fields.satuan && this.fields.satuan.valid}" id="satuan" name="satuan" placeholder="{{ trans('admin.penjualan.columns.satuan') }}">
        <div v-if="errors.has('satuan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('satuan') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('total'), 'has-success': this.fields.total && this.fields.total.valid }">
    <label for="total" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.penjualan.columns.total') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.total" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('total'), 'form-control-success': this.fields.total && this.fields.total.valid}" id="total" name="total" placeholder="{{ trans('admin.penjualan.columns.total') }}">
        <div v-if="errors.has('total')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('total') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('potongan_manual'), 'has-success': this.fields.potongan_manual && this.fields.potongan_manual.valid }">
    <label for="potongan_manual" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.penjualan.columns.potongan_manual') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.potongan_manual" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('potongan_manual'), 'form-control-success': this.fields.potongan_manual && this.fields.potongan_manual.valid}" id="potongan_manual" name="potongan_manual" placeholder="{{ trans('admin.penjualan.columns.potongan_manual') }}">
        <div v-if="errors.has('potongan_manual')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('potongan_manual') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_barang'), 'has-success': this.fields.id_barang && this.fields.id_barang.valid }">
    <label for="id_barang" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.penjualan.columns.id_barang') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_barang" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_barang'), 'form-control-success': this.fields.id_barang && this.fields.id_barang.valid}" id="id_barang" name="id_barang" placeholder="{{ trans('admin.penjualan.columns.id_barang') }}">
        <div v-if="errors.has('id_barang')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_barang') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_promo'), 'has-success': this.fields.id_promo && this.fields.id_promo.valid }">
    <label for="id_promo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.penjualan.columns.id_promo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_promo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_promo'), 'form-control-success': this.fields.id_promo && this.fields.id_promo.valid}" id="id_promo" name="id_promo" placeholder="{{ trans('admin.penjualan.columns.id_promo') }}">
        <div v-if="errors.has('id_promo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_promo') }}</div>
    </div>
</div>


