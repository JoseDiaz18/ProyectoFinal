@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Promociones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($promociones, ['route' => ['promociones.update', $promociones->id], 'method' => 'patch']) !!}

                        @include('promociones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection