@extends('layouts.main')

@section('title','Dashboard')

@section('content')
    <div>
        <h1>Meus eventos</h1>
    </div>
    <div>
        @if(count($events) > 0)
        @else
        <p>Você não tem eventos, <a href="/events/create">criar evento</a></p>
        @endif
    </div>
   
@endsection

