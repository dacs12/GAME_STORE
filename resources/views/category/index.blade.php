@extends('layouts.app')
@section('content')
	<!--aquí va el contenido de la página-->
    <div class="container">
    <h1>Todas las categorías</h1>
    <a class="btn btn-main-brand float-right my-3" href="/category/create">{{__('es.category.create_title')}}</a>

    <table class="table">
        <thead>
            <th scope="col">{{__('es.category.name')}}</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($category as $cat)
                <tr>
                    <td> {{ $cat -> name}}</td>
                    <td>
                        <a type="button" class="btn btn-success d-inline" data-toggle="tooltip" title="Consultar" href="/category/{{$cat -> id}}"><i class="fa fa-search"></i> </a>
                        <a type="button" class="btn btn-primary d-inline" data-toggle="tooltip" title="Editar" href="/category/{{$cat -> id}}/edit"><i class="fa fa-edit"></i> </a>
                        <form action="{{route('category.destroy', $cat ->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
    </div>
@endsection