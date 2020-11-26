@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Restaurants
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($restaurants, ['route' => ['restaurants.update', $restaurants->id], 'method' => 'patch']) !!}

                        @include('restaurants.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection