@extends('layouts.app')
@section('content')
<!--aquí va el contenido de la página-->
    <div class="container">
        <h1>Nueva Categoría</h1>
        <form method="POST" class="needs-validation" action="/category" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <label class="form-label">@lang('es.category.name')</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror " value="{{ old('name') }}" />
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button class="my-3 btn btn-main-brand">Crear Categoría</button>
        </form>
    <div class="container">
@endsection