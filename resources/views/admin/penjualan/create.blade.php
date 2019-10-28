@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.penjualan.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">
        
        <penjualan-form
            :action="'{{ url('admin/penjualans') }}'"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>
                
                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.penjualan.actions.create') }}
                </div>

                <div class="card-body">
                    @include('admin.penjualan.components.form-elements')
                </div>
                                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>
                
            </form>

        </penjualan-form>

        </div>

        </div>

    
@endsection