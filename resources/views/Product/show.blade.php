@extends('layouts.app')
@section('content')
<!--aquí va el contenido de la página-->
<h1 class="text-center mt-3">@lang('es.product.show_title')</h1>
<div class="container ">
    <div class="d.flex justify-content-center">
        <div class="my-3"><h1 class="text-center"><b> Descripción del producto</b></h1></div>
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img class="card-img" src="{{url(Storage::url($product->image))}}" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h4 class="card-title"><b>@lang('es.product.name'): </b> {{ $product->name }}</h4>
                        <p class="card-text"><b>@lang('es.product.value'): </b>{{ $product->value }}</p>
                        <p class="card-text"><b>@lang('es.product.status'): </b>{{ $product->status }}</p>
                        <p class="card-text"><b>@lang('es.product.brand'): </b>{{ $product->brand }}</p>
                        <p class="card-text"><b>@lang('es.product.type'): </b>{{ $product->type }}</p>
                        <p class="card-text"><b>@lang('es.product.category_id'): </b>{{ $product->category_id }}</p>
                        <p class="card-text"><b>@lang('es.product.description'): </b>{{ $product->description }}</p>
                    </div>
                    <div class="m-3 d-flex justify-content-center">
                    @guest
                        <a class="mx-4 btn btn-main-brand btn-block" href="/listproduct">Volver</a>
                    @else
                        <a class="mx-4 btn btn-main-brand btn-block" href="/product">Volver</a>
                    @endguest
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection