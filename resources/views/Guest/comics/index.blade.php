@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                    @foreach ($comics as $comic)
                        <div class="col">
                                <div class="card">
                                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} picture">
                                    <form action="{{ route('guest.comics.show', $comic['id']) }}">
                                <button type="submit" class="btn btn-primary">Visualizza la card</button>
                            </form>
                            <form action="{{ route('guest.comics.create') }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-two">Crea La Tua Card</button>
                                    <div class="card-body">
                                        <p class="text-uppercase">
                                            {{ $comic->title }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection