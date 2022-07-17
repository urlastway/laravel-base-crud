@extends('layouts.base')

@section('page-title')
    Tutti commics
@endsection

@section('page-content')
    <h1>Tutti commics</h1>
    <table class="table table-striped-columns">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">immage</th>
            <th scope="col">title</th>
            <th scope="col">type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>
                        <img src="{{$product->immage ? $product->immage : 'https://www.karr-italiana.it/wp-content/uploads/2016/11/img-placeholder.png'}}">
                    </td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->type}}</td>
                    <td><a type="button" class="btn btn-primary" href={{route('products.show', $product->id)}}>See for more</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection