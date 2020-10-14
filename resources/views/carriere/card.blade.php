@foreach ($data as $key => $student)
    <div class="g-card shadow">
        <div class="g-card-top">
            <img src="{{$student->img}}" class="g-card-img" alt="{{$student->nome}}">
            <a href="{{route('Student.show', ['id' => $student->id])}}">
                <h5 class="g-card-name">{{$student->nome}} ({{$student->anni}} Anni)</h5>
            </a>

            <p class="g-card-hire">Assunt{{ ($student->genere == 'F') ? 'a' : 'o'}} da {{$student->azienda}}</p>
        </div>
        <div class="g-card-bottom">
            <p class="g-card-description">{{$student->descrizione}}</p>

        </div>
    </div>
@endforeach
