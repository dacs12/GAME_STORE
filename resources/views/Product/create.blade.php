@extends('layouts.app')
@section('content')
<div class="card text-Dark  bg-Light  mb-3">
<div class="card-header">
<h1 class="text-center mt-5">@lang('es.product.create_title')</h1>
</div>
<div class="card-body">
<form method="POST" class="needs-validations" action="/product" enctype="multipart/form-data" novalidate>

    @csrf
    <div class="form-row row">
        <div class="col-12 col-md-6 col-sm-6">
        <label class="form-label">@lang('es.product.image')</label>
            <input type="file" name="productcover" class="form-control">
        <!--<label class="form-label">@lang('es.product.image')</label>
                <div class="custom-file">
                    <input type="file" id="image" name="image" class="custom-file-input" />
                    <label class="custom-file-label" for="image" data-browse="Seleccionar"></label>-->
           <!-- -->
        </div>
    </div>

    <div class="form-row mt-4 row">
        <div class="col-12 col-sm-4 col-md4">
            <label>@lang('es.product.name')</label>
            <input type="text" id="name" name="name" class="form-control $error
            ('name') is-invalid $enderror" value="{{ old('name') }}" />
            @error('name')
            <span class="invalid-feedback" role="alert">
                <b> {{$message}} </b>
            </span>
            @enderror
        </div>

        <div class="col-12 col-sm-4 col-md4">
            <label>@lang('es.product.value')</label>
            <input type="text" id="value" name="value" class="form-control $error
            ('name') is-invalid $enderror" value="{{ old('value') }}" />

            @error('value')

            <span class="invalid-feedback" role="alert">
                <b> {{$message}} </b>
            </span>
            @enderror
        </div>

        <div class="col-12 col-sm-4 col-md4">
                <label class="form-label">@lang('es.product.category_id')</label>
                <select id="category_id" name="category_id" class="form-control" value="{{ old('category_id') }}">
                    <option value="">Seleccione una categoría</option>
                @foreach($category as $cat) 
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
                </select>
            </div>

        <div class="col-12 col-sm-4 col-md4">
            <label>@lang('es.product.status')</label>
            <select id="status" name="status" class="form-control">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>

        <div class="col-12 col-sm-4 col-md4">
                <label class="form-label">@lang('es.product.brand')</label>
                <input type="text" id="brand" name="brand" class="form-control @error('brand') is-invalid @enderror " value="{{ old('brand') }}"/>
                @error('brand')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 col-sm-4 col-md4">
                <label class="form-label">@lang('es.product.type')</label>
                <select id="type" name="type" class="form-control" value="{{ old('type') }}">
                    <option value="Físico">Físico</option>
                    <option value="Digital">Digital</option>
                </select>
            </div>

       
    </div>

    <div class="form-row mt-4 row">
        <div class="col-12">
            <label>@lang('es.product.description')</label>
            <textarea id="description" name="description" class="form-control
                    $error('value') is-invalid $enderror ">{{ old('description') }} </textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <b>{{$message}}</b>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row mt-4 mt-4 row">
        <div class="col-12 text-center">
            <button class="btn btn-success">Enviar</button>
        </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <a class="btn btn-secondary" href="/product">Volver</a>
            </div>
</form>
</div>
</div>
@endsection
