@extends('layouts.base')

@section('page-title')
    {{$product->title}}
@endsection

@section('page-content')
    <h1>{{$product->title}}</h1>
    <div class="">
        {!!$product->description!!}
    </div>
    <ul>
        <li>Serie: {{$product->series}}</li>
        <li>Data: {{$product->sale_date}}</li>
        <li>Tipo: {{$product->type}}</li>
    </ul>
    <h3>Prezzo: {{$product->price}}</h3>
    <p><a href="{{route('products.index')}}">Torna alla pagina Home</a></p>
@endsection