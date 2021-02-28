@extends('layouts.app')
@section('content')
<!--aquí va el contenido de la página-->
    <div class="container">
        <h1>@lang('es.category.edit_title')</h1>
        <form method="Post" class="needs-validation" action="/category/{{ $category -> id }}" enctype="multipart/form-data" novalidate>
            {{csrf_field()}}
            @csrf
            @method('put')
            <div class="form-row">
                <div class="col-md-6">
                    <label class="form-label">@lang('es.category.name')</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror "
                        value="{{ $category -> name }}" />
                    @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button class="my-3 btn btn-main-brand">Guardar</button>
        </Form>
    </div>

@endsection