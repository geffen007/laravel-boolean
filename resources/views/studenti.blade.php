@extends('layouts.app')

@section('title', 'Studenti')

@section('content')
    <div class="containerfluid g-section bcg-blue">
        <div class="container">

        </div>
    </div>
    <div class="containerfluid g-section">
        <div class="container">
            <div class="card-group">
                @include('carriere/card')
            </div>
        </div>
    </div>
    <div class="containerfluid g-section">
        <div class="container">

        </div>
    </div>
@endsection
