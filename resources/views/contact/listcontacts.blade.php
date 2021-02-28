
	<!--aquí va el contenido de la página-->
<div class="container">
    <h1>Listado de Contactos de la Tienda</h1>

    <table class="table">
        <thead>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Mensaje</th>

        </thead>
        <tbody>

            @foreach ($contacts as $cont)
                <tr>
                    <td> {{ $cont -> name}}</td>
                    <td> {{ $cont-> email}}</td>
                    <td> {{ $cont -> message}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

