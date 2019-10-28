<div class="form-group row align-items-center" :class="{'has-danger': errors.has('bonus_barang'), 'has-success': this.fields.bonus_barang && this.fields.bonus_barang.valid }">
    <label for="bonus_barang" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.promo.columns.bonus_barang') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.bonus_barang" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('bonus_barang'), 'form-control-success': this.fields.bonus_barang && this.fields.bonus_barang.valid}" id="bonus_barang" name="bonus_barang" placeholder="{{ trans('admin.promo.columns.bonus_barang') }}">
        <div v-if="errors.has('bonus_barang')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('bonus_barang') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('diskon'), 'has-success': this.fields.diskon && this.fields.diskon.valid }">
    <label for="diskon" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.promo.columns.diskon') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.diskon" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('diskon'), 'form-control-success': this.fields.diskon && this.fields.diskon.valid}" id="diskon" name="diskon" placeholder="{{ trans('admin.promo.columns.diskon') }}">
        <div v-if="errors.has('diskon')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('diskon') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('keterangan'), 'has-success': this.fields.keterangan && this.fields.keterangan.valid }">
    <label for="keterangan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.promo.columns.keterangan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.keterangan" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('keterangan'), 'form-control-success': this.fields.keterangan && this.fields.keterangan.valid}" id="keterangan" name="keterangan" placeholder="{{ trans('admin.promo.columns.keterangan') }}">
        <div v-if="errors.has('keterangan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('keterangan') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('mulai_promo'), 'has-success': this.fields.mulai_promo && this.fields.mulai_promo.valid }">
    <label for="mulai_promo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.promo.columns.mulai_promo') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.mulai_promo" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('mulai_promo'), 'form-control-success': this.fields.mulai_promo && this.fields.mulai_promo.valid}" id="mulai_promo" name="mulai_promo" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('mulai_promo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('mulai_promo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('selesai_promo'), 'has-success': this.fields.selesai_promo && this.fields.selesai_promo.valid }">
    <label for="selesai_promo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.promo.columns.selesai_promo') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.selesai_promo" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('selesai_promo'), 'form-control-success': this.fields.selesai_promo && this.fields.selesai_promo.valid}" id="selesai_promo" name="selesai_promo" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('selesai_promo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('selesai_promo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_barang'), 'has-success': this.fields.id_barang && this.fields.id_barang.valid }">
    <label for="id_barang" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.promo.columns.id_barang') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_barang" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_barang'), 'form-control-success': this.fields.id_barang && this.fields.id_barang.valid}" id="id_barang" name="id_barang" placeholder="{{ trans('admin.promo.columns.id_barang') }}">
        <div v-if="errors.has('id_barang')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_barang') }}</div>
    </div>
</div>


