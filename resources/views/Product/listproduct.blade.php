@extends('layouts.app')
@section('content')
<!--aquí va el contenido de la página-->
<div class="container">
    <h1>@lang('es.product.list_products_title')</h1>

    @foreach ($category as $cat)
    
        <h2 class="my-3">{{$cat->name}}</h2>
        <div class="row mt-4">
        @foreach ($products as $prod)
        @if ($prod->category_id == $cat->id)
        <div class="col-md-6 col-lg-3">
            <div class="card text-center">
                <img src="storage/{{ $prod->image }}" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h5 class="card-title">{{ $prod->name }}</h5>
                    <p class="card-text description-product">{{ $prod->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Valor: {{ number_format($prod->value, 0, ',', '.') }}</li>

                </ul>
                <div>
                    <a href="/product/{{$prod -> id}}" class="btn btn-main-brand btn-block">Ver más...</a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        </div>
        
    @endforeach

    
</div>


@endsection