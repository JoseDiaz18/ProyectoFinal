@extends('layouts.app')

@section('content')
    <section class="content-header d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="pull-left">Promociones</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('promociones.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('promociones.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $promociones])

        </div>
    </div>
@endsection
