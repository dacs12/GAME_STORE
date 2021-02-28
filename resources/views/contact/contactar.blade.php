@extends('layouts.app')
@section('content')

<div class="container">
    <H1 class="card-title my-3 text-center"> Formulario de Contacto</H1>
    <Div class="row">
        
        <div class="col-12 col-sd-6 col-md-6 col-lg-6">
            <div class="card ">
                
                <div class="card-body">
                    <form method="GET" class="needs-validation" action="{{route('notificarcontacto')}}" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="form-group row">
                            <label for="inputname" class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                                @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">E-mail</label>
                            <div class="col-sm-9">
                                <input type="email" id="emai" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('name')}}">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mensaje</label>
                            <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror " value="{{ old('description') }}"></textarea>
                            @error('message')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-main-brand  btn-block " type="submit"
                            class="btn btn-primary">Enviar Mensaje</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-12 col-sd-6 col-md-6 col-lg-6 contacto">

            <p> Déjanos tus datos con tu mensaje y muy pronto nos pondremos en contacto contigo.</p>

            <div class="d-flex align-items-center">
                <i class="far fa-envelope fa-2x text-main-brand">   </i> 
                <div class=""> &nbsp dacs1294@gmail.com</div>
                <br>
                
            </div>
            <div class="d-flex align-items-center">
                <i class="fab fa-2x fa-whatsapp text-main-brand"> </i>
                <div class="">&nbsp + 57 3212105557</div>

            </div>
        </div>
    </div>
</div>    
@endsection

