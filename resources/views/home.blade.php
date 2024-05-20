@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <h1>I nostri prodotti</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{$product['title']}}</li>
        @endforeach
    </ul>
</section>

@endsection