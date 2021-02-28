<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


    <div class="container">
        <H1 class="card-title my-3 text-center"> Ha recibido un nuevo contacto</H1>

        <div class="card ">
            <div class="card-body">
                <h3 class="list-group-item"><b> Datos de registro: </b></h3>
                <ul class="list-group list-group-flush">
  
                    <li class="list-group-item"><b> Nombre: </b> {{ $contact->name }} </li>
                    <li class="list-group-item"><b>Email: </b>  {{ $contact->email }}</li>
                    <li class="list-group-item"><b>Mensaje: </b>  {{ $contact->message }}</li>
                </ul>
                
            </div>
        </div>

    </div>

   
</body>
</html>


