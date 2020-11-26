@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Restaurants
        </h1>
    </section>
    <div class="content">
        <!-- <div class="box box-primary"> -->
        <div class="card shadow mb-4">
            <!-- <div class="box-body"> -->
            <div class="card-header py-3">
                <div class="row" style="padding-left: 20px">
                    @include('restaurants.show_fields')
                    <a href="{{ route('restaurants.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
