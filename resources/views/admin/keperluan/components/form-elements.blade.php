<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jenis_keperluan'), 'has-success': this.fields.jenis_keperluan && this.fields.jenis_keperluan.valid }">
    <label for="jenis_keperluan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.keperluan.columns.jenis_keperluan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jenis_keperluan" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jenis_keperluan'), 'form-control-success': this.fields.jenis_keperluan && this.fields.jenis_keperluan.valid}" id="jenis_keperluan" name="jenis_keperluan" placeholder="{{ trans('admin.keperluan.columns.jenis_keperluan') }}">
        <div v-if="errors.has('jenis_keperluan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jenis_keperluan') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('biaya_keluar'), 'has-success': this.fields.biaya_keluar && this.fields.biaya_keluar.valid }">
    <label for="biaya_keluar" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.keperluan.columns.biaya_keluar') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.biaya_keluar" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('biaya_keluar'), 'form-control-success': this.fields.biaya_keluar && this.fields.biaya_keluar.valid}" id="biaya_keluar" name="biaya_keluar" placeholder="{{ trans('admin.keperluan.columns.biaya_keluar') }}">
        <div v-if="errors.has('biaya_keluar')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('biaya_keluar') }}</div>
    </div>
</div>


