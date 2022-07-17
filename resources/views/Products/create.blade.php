@extends('layouts.base')

@section('page-title')
    Create New Product
@endsection

@section('page-content')
    <h1>Create Product</h1>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="titolo" class="form-label">Title</label>
          <input type="text" class="form-control" id="titolo" name="title">
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Type</label>
            <select class="form-select" id="tipo" name="type">
                <option value="comicBook">comic book</option>
                <option value="graphicNovel">graphic novel</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prezzo" class="form-label">Price</label>
            <input type="number" class="form-control" id="prezzo" name="price">
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Date</label>
            <input type="date" class="form-control" id="data" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Seria</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="descrizione" class="form-label">Description</label>
            <textarea class="form-control" id="descrizione" rows="3" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="immagine" class="form-label">Image</label>
            <input type="image" class="form-control" id="immagine" name="immage">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
@endsection