@extends('layouts.app')

@section('main-content')
<div class="container py-5">
    <div class="row">
        <div class="card col-12 mb-5">
                <div class="row p-5 align-items-center">
                <div class="col-2">
                    <img src="{{ $comics['thumb'] }}" class="img-fluid rounded-start" alt="picture of {{ $comics['title'] }}">
                </div>
                <div class="col-10">
                    <div class="card-body">
                        <h2 class="card-title">{{ $comics['title'] }}</h2>
                        <p class="card-text">{{ $comics['description'] }}</p>
                        <pre class="card-text">Price: <small class="text-muted">{{ $comics['price'] }}</small></pre>
                        <pre class="card-text">Series: <small class="text-muted">{{ $comics['series'] }}</small></pre>
                        <pre class="card-text">Sale date: <small class="text-muted">{{ $comics['sale_date'] }}</small></pre>
                        <pre class="card-text">Type: <small class="text-muted">{{ $comics['type'] }}</small></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection