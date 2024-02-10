@extends('layouts.app')

@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Modifica fumetto:
                </h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('guest.comics.update', $comic->id) }}" method="POST" >
                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label for="title"class="form-label">
                            Nome del fumetto:
                        </label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old( 'title' ,$comic->title) }}">
                    </div>


                    <div class="mb-3">
                        <label for="description"class="form-label">Descrizione:</label>
                        <input type="text" name="description" id="description" value="{{ old( 'description' ,$comic->description) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="thumb"class="form-label">Immagine del fumetto:</label>
                        <input type="text" name="thumb" id="thumb" value="{{ old( 'thumb' ,$comic->thumb) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="price"class="form-label">Prezzo:</label>
                        <input type="text" name="price" id="price"  value="{{ old( 'price' ,$comic->price) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="series"class="form-label">Serie:</label>
                        <input type="text" name="series" id="series" class="form-control" value="{{ old( 'series' ,$comic->series) }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date"class="form-label">Data:</label>
                        <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{ old( 'sale_date' ,$comic->sale_date) }}">
                    </div>

                    <div class="mb-3">
                        <label for="type"class="form-label">Genere:</label>
                        <input type="text" name="type" id="type" class="form-control" value="{{ old( 'type' ,$comic->type) }}">
                    </div>

                    <div class="mb-3">
                        <label for="artists"class="form-label">Artisti:</label>
                        <input type="text" name="artists" id="artists" class="form-control" value="{{ old( 'artists' ,$comic->artists) }}">
                    </div>

                    <div class="mb-3">
                        <label for="writers"class="form-label">Genere:</label>
                        <input type="text" name="writers" id="writers" class="form-control" value="{{ old( 'writers' ,$comic->writers) }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Modifica il fumetto</button>
                </form>
            </div>
        </div>
    </section>
@endsection