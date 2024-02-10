@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $comic->title }}
                            </h1>
                            <p>
                                Descrizione: {{ $comic->description }}
                            </p>
                            <p>
                                Prezzo: {{ $comic->price }}
                            </p>
                            <p>
                                Serie: {{ $comic->series }}
                            </p>
                            <p>
                                Data: {{ $comic->sale_date }}
                            </p>
                            <p>
                                Genere: {{ $comic->type }}
                            </p>
                            <p>
                                Artisti: {{ $comic->artists }}
                            </p>
                            <p>
                                Scrittori: {{ $comic->writers }}
                            </p>

                            <div class="card-image">
                                <img class="w-50" src="{{  $comic->thumb }}" alt="{{ $comic->title }} ">
                            </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection