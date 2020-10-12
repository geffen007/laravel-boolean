@extends('layouts.app')

@section('title', 'Studenti')

@section('content')
    <div class="card-group">
        @foreach ($data as $student)
            <div class="g-card shadow">

                <div class="g-card-top">
                    <img src="{{$student['img']}}" class="g-card-img" alt="{{$student['nome']}}">
                    <h5 class="g-card-name">{{$student['nome']}} ({{$student['anni']}} Anni)</h5>
                    <p class="g-card-hire">Assunto da {{$student['azienda']}}</p>
                </div>
                <div class="g-card-bottom">
                    <p class="g-card-description">{{$student['descrizione']}}</p>

                </div>
            </div>
        @endforeach
    </div>
@endsection
