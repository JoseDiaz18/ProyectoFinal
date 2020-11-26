@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Reseñas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reseñas, ['route' => ['reseñas.update', $reseñas->id], 'method' => 'patch']) !!}

                        @include('reseñas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection