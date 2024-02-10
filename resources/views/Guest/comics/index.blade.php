@extends('layouts.app')

@section('main-content')

<h1 class="title text-center mb-5">
    Cards Comics
</h1>
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <p class="card-text">Price: {{ $comic->price }}</p>
                    <p class="card-text">Series: {{ $comic->series }}</p>
                    <p class="card-text">Sale Date: {{ $comic->sale_date }}</p>
                    <p class="card-text">Type: {{ $comic->type }}</p>
                    <a href="{{ route('guest.comics.show', $comic->id) }}" class="btn btn-primary">Visualizza La Card</a>
                    <form action="{{ route('guest.comics.create') }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">Crea La Tua Card</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
