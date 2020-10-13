@extends('layouts.app')

@section('title', 'Studenti')

@section('content')
    <div class="container">


        <div class="card-group">
            @include('carriere/card')
        </div>
    </div>
@endsection
