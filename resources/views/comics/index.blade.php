@extends('layouts.app')

@section('main-content')

<div class="container py-5">
    <div class="row justify-content-between">
        @foreach ($comics as $index => $comicsItem)
        <div class="card col-4 mb-5 p-0" style="width: 400px">
            <div class="row g-0">
                <div class="col">
                    <a href="{{route("comics.show", $comicsItem->id)}}">
                        <img src="{{ $comicsItem['thumb'] }}" class="img-fluid rounded-start p-2" alt="picture of {{ $comicsItem['title'] }}">
                    </a>
                </div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comicsItem['title'] }}</h5>
                        <pre class="card-text">Price: <small class="text-muted">{{ $comicsItem['price'] }}</small></pre>
                        <pre class="card-text">Sale date: <small class="text-muted">{{ $comicsItem['sale_date'] }}</small></pre>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
