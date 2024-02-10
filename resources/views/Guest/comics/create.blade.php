@extends('layouts.app')

@section('main-content')
<form action="{{ route('guest.comics.store') }}" method='POST'>
    @csrf    
  <div class="row d-flex flex-column align-items-center">
    <div class="col-7">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ old( 'title') }}">
        </div>
        <div class="form-group col-md-6">
          <label for="name">description</label>
          <input type="text" name="description" class="form-control" id="description" placeholder="description of your comic" value="{{ old( 'description') }}">
        </div>
      </div>
      <div class="form-group">
        <label for="name">thumb</label>
        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="image of your comic" value="{{ old( 'thumb') }}">
      </div>
      <div class="form-group">
        <label for="name">price</label>
        <input type="text" name="price" class="form-control" id="price" placeholder="price of your comic" value="{{ old( 'price') }}">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">series</label>
          <input type="text" class="form-control" name="series" id="series" value="{{ old( 'series') }}">
        </div>
        
        <div class="form-group col-md-2">
          <label for="name">sale_date</label>
          <input type="text" name="sale_date" class="form-control" id="sale_date" value="{{ old( 'sale_date') }}">
        </div>
        <div class="form-group col-md-2">
          <label for="name">type</label>
          <input type="text" name="type" class="form-control" id="type" value="{{ old( 'type') }}">
        </div>
        <div class="form-group col-md-2">
          <label for="name">artists</label>
          <input type="text" name="artists" class="form-control" id="artists" value="{{ old( 'artists') }}">
        </div>
        <div class="form-group col-md-2 mb-4">
          <label for="name">writers</label>
          <input type="text" name="writers" class="form-control" id="writers" value="{{ old( 'writers') }}">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Crea Nuovo Fumetto </button>
    </div>
  </div>
</form>
@endsection