@extends('layouts.main')

@section('title', 'Eventos')

@section('content')

      
        {{-- <img class="banner" src="/img/eventos.jpg" alt="Banner">--}}
        
        {{--esse é o comentario do blade --}}

        <div id="search-container" class="col-md-12">
                <h1>Busque um evento</h1>
                <form action="">
                        <input type="text" id="search" name="search" class="form-control" placeholder="procurar...">
                </form>
        </div>
        <div id="events-container" class="col-md-12">
                <h2>Próximos Eventos</h2>
                <p>Veja os eventos dos próximos dias</p>
                <div id="cards-container" class="row">
                        @foreach($events as $event)
                        <div class="card col-md-3">
                                <img src="/img/2.png" alt="{{$event->title}}">
                                <div class="card-body">
                                        <p class="card-date">10/09/2020</p>
                                        <h5 class="card-title">{{$event->title}}</h5>
                                        <p class="card-participants">X Participantes</p>
                                        <a href="#" class="btn btn-primary">Saber mais</a>
                                </div>
                        </div>
                        @endforeach
                </div>
        </div>

@endsection
