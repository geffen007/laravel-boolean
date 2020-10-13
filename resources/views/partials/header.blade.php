<div class="g-topbar container-fluid">
    <div class="g-notification">
        <img src="https://www.boolean.careers/images/icons/bell.png" alt="bell">
        <span>prossimo corso in partenza</span>
        <span class="g-date">13 Gennaio</span>
    </div>
</div>

<div class="d-block">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img class="logo" src="https://www.boolean.careers/images/misc/logo.png" alt="logo boolean">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item">
                    <a class="{{(url()->current()==route('StaticPage.home')? 'g-active' : '')}}" href="{{route('StaticPage.home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                    <a class="{{(url()->current()==route('StaticPage.chisiamo')? 'g-active' : '')}}" href="{{route('StaticPage.chisiamo')}}">chi siamo</a>
                    </li>
                    <li class="nav-item ">
                    <a class="{{(url()->current()==route('Student.studenti')? 'g-active' : '')}}" href="{{route('Student.studenti')}}">Dopo il corso</a>
                    </li>
                    <button type="button" class="button1">Candidati Ora</button>
                </ul>
            </div>
        </div>
    </nav>

</div>
