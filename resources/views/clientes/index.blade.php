Lista de clientes registrados
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Session::has('mensaje'))
            {{-- Alerta con boton de cerrar --}}
            <div class="alert alert-success alert-dismissible" role="alert">
                {{Session::get('mensaje')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif 
        <a href="{{ url('clientes/create') }}" class="btn btn-success">Registrar nuevo cliente</a>
        <br><br>
        <table class="table table-light">
            
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Campaña</th>
                    <th>Correo</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->campaing }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <a href="{{ url('/clientes/'.$client->id.'/edit') }}" class="btn btn-warning">
                            Editar
                        </a>
                        |   
                        <form action="{{ url('/clientes/'.$client->id ) }}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres Borrar?')"
                            value="Borrar">
                        </form>
                    </td>
                </tr>    
                @endforeach
            </tbody>
        </table>
        {!! $clients->links() !!}
    </div>
</body>
</html>
