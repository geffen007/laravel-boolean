@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="containerfluid g-section">
        <div class="container">
                @include('home/section1')
        </div>
    </div>
    <div class="containerfluid g-section bcg-blu">
        <div class="container">
                @include('home/section2')
        </div>
    </div>
    <div class="containerfluid g-section">
        <div class="container">
                @include('home/section3')
        </div>
    </div>
@endsection
