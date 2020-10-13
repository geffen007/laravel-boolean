@extends('layouts.app')

@section('title', 'Studenti')

@section('content')
    <div class="container">


        <div class="card-group">
            @foreach ($data as $key => $student)
                <div class="g-card shadow">

                    <div class="g-card-top">
                        <img src="{{$student['img']}}" class="g-card-img" alt="{{$student['nome']}}">
                        <a href="{{route('Student.show', ['id' => $key])}}">
                            <h5 class="g-card-name">{{$student['nome']}} ({{$student['anni']}} Anni)</h5>
                        </a>

                        <p class="g-card-hire">Assunt{{ ($student['genere'] == 'F') ? 'a' : 'o'}} da {{$student['azienda']}}</p>
                    </div>
                    <div class="g-card-bottom">
                        <p class="g-card-description">{{$student['descrizione']}}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
