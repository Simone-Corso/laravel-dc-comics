@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                    @foreach ($comics as $comic)
                        <div class="col">
                                <div class="card text-center">
                                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} picture">
                                    <div class="card-body">
                                        <p class="text-uppercase">
                                            {{ $comic->title }}
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-center flex-column">
                                    <div class="text-center">
                                    <div class="text-center">
                                            <a href="{{ route('guest.comics.show', $comic['id']) }}" class="btn btn-primary w-50">Visualizza la card</a>
                                        </div>
                            </form> 
                            <form action="{{ route('guest.comics.create') }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-primary w-50 mt-1 mb-4">Crea La Tua Card</button>
                                </div>
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