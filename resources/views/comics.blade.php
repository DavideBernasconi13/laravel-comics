@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<section class="container">
    <h1>Comics</h1>

    @foreach ($products as $product)
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img src="{{$product['thumb']}}" class="card-img-top" alt="{{$product['title']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$product['title']}}</h5>
                        <p class="card-text">{{$product['description']}}</p>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
</section>

@endsection