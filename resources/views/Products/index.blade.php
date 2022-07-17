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
                        <img src="{{$product->immage}}">
                    </td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->type}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection