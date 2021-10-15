<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Visualizar</title>
</head>
<body class="fondo">
    <section class="contenedor">
        <form id="sidebar" action="{{url('/clientes')}}" method="GET">
            <div for="" class="toggle-btn">
              <span><img src="{{asset('images/filtro-icono.png')}}"></span>
            </div>
            <ul>
              <li>
                <img src="{{asset ('images/0-site-logo.png')}}" alt="Logo Fazt" class="logo">
              </li>
              <li>BUSQUEDA DIRECTA</li>
              <li>
                <div class="input-group flex-nowrap">
                  <input type="text" class="form-control" name="buscar" placeholder="Busqueda por nombre de empresa">
                  <span class="input-group-text btn-buscar" id="addon-wrapping">&#128270</span>
                </div>
              </li>
            </ul>

              <ul>
                {{-- <li >BUSQUEDA POR LOCALIZACION</li>
                <li>
                  <Label class="form-select-label">País</Label>
                  <select name="country" id="country" class="form-control" data-validate="validate(required, country)">
                    <option selected>Choose country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country['name'] }}"> {{ $country['name'] }}</option>
                    @endforeach
                </select>
                </li> --}}
              <div id="botones">
                <button type="submit" class="btn">BUSCAR</button>
                <button type="reset" class="btn">LIMPIAR FILTRO</button>
              </div>
            </ul>
          </form>

        <div class="contenido">
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
    </section>
    <script src="{{asset('js/main2.js')}}" charset="utf-8"></script>
</body>
</html>
